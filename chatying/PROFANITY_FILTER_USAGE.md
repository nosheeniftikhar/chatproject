# Profanity Filter System Documentation

This document describes the comprehensive profanity filtering system implemented in the Chatying application.

## Overview

The system provides multilingual profanity filtering with support for:
- English, Hindi/Urdu, Arabic, Spanish, French, German, Italian, Russian, Portuguese
- Leetspeak variations and common misspellings
- Real-time client-side validation
- Server-side validation and filtering
- Laravel middleware integration

## Components

### 1. Client-Side Implementation

#### JavaScript Functions (Both index.blade.php and userlogin.blade.php)

```javascript
// Get comprehensive list of profanity words
function getProfanityWords() { ... }

// Check if text contains profanity
function containsProfanity(text) { ... }

// Filter profanity by replacing with asterisks
function filterProfanity(text) { ... }

// Real-time input validation
function validateMessageInput(input) { ... }
```

#### Features:
- **Real-time validation**: Input fields change color when profanity is detected
- **Send button disabling**: Prevents sending messages with inappropriate content
- **Enter key handling**: Blocks sending via Enter key if profanity is present
- **Visual feedback**: Red border and background for invalid inputs

### 2. Server-Side Implementation

#### ProfanityFilter Helper Class

Location: `app/Helpers/ProfanityFilter.php`

**Main Methods:**
```php
// Check if text contains profanity
ProfanityFilter::containsProfanity($text)

// Filter profanity from text
ProfanityFilter::filterProfanity($text)

// Comprehensive validation
ProfanityFilter::validate($text, $strict = true)

// Manage word list
ProfanityFilter::addWords(array $words)
ProfanityFilter::removeWords(array $words)
ProfanityFilter::getWordList()
```

#### Custom Validation Rule

Location: `app/Rules/NoProfanity.php`

**Usage in Controllers:**
```php
use App\Rules\NoProfanity;

$request->validate([
    'nickname' => ['required', new NoProfanity()],
    'message' => ['required', new NoProfanity('Custom error message')]
]);
```

#### Middleware Implementation

Location: `app/Http/Middleware/ProfanityFilterMiddleware.php`

**Usage:**
```php
// In routes or controllers
Route::post('/chat', 'ChatController@store')
    ->middleware('profanity:strict');  // Reject with error
    
Route::post('/message', 'MessageController@store')
    ->middleware('profanity:filter');  // Auto-filter content
    
Route::post('/comment', 'CommentController@store')
    ->middleware('profanity:log');     // Log violations
```

**Register Middleware** (in `app/Http/Kernel.php`):
```php
protected $routeMiddleware = [
    // ... other middleware
    'profanity' => \App\Http\Middleware\ProfanityFilterMiddleware::class,
];
```

## Usage Examples

### 1. Controller Integration

```php
<?php

namespace App\Http\Controllers;

use App\Helpers\ProfanityFilter;
use App\Rules\NoProfanity;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    public function store(Request $request)
    {
        // Method 1: Using validation rule
        $request->validate([
            'nickname' => ['required', 'string', 'max:50', new NoProfanity()],
            'message' => ['required', 'string', 'max:500', new NoProfanity()]
        ]);
        
        // Method 2: Manual validation
        $validation = ProfanityFilter::validate($request->message, true);
        if (!$validation['valid']) {
            return back()->withErrors(['message' => $validation['message']]);
        }
        
        // Method 3: Auto-filtering
        $filteredMessage = ProfanityFilter::filterProfanity($request->message);
        
        // Process the request...
    }
}
```

### 2. Model Integration

```php
<?php

namespace App\Models;

use App\Helpers\ProfanityFilter;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['user_id', 'content', 'is_filtered'];
    
    // Automatically filter content when setting
    public function setContentAttribute($value)
    {
        $validation = ProfanityFilter::validate($value, false);
        $this->attributes['content'] = $validation['text'];
        $this->attributes['is_filtered'] = !empty($validation['message']);
    }
    
    // Check if original content had profanity
    public function getIsCleanAttribute()
    {
        return !$this->is_filtered;
    }
}
```

### 3. Form Request Integration

```php
<?php

namespace App\Http\Requests;

use App\Rules\NoProfanity;
use Illuminate\Foundation\Http\FormRequest;

class ChatRequest extends FormRequest
{
    public function rules()
    {
        return [
            'nickname' => [
                'required',
                'string',
                'max:50',
                new NoProfanity('Please choose a different nickname without inappropriate words.')
            ],
            'message' => [
                'required',
                'string',
                'max:1000',
                new NoProfanity('Your message contains inappropriate language.')
            ]
        ];
    }
}
```

## Configuration

### 1. Adding Custom Words

```php
// Add project-specific inappropriate terms
ProfanityFilter::addWords(['custom_word1', 'custom_word2']);
```

### 2. Environment-based Configuration

Create a config file at `config/profanity.php`:

```php
<?php

return [
    'enabled' => env('PROFANITY_FILTER_ENABLED', true),
    'strict_mode' => env('PROFANITY_STRICT_MODE', true),
    'custom_words' => env('PROFANITY_CUSTOM_WORDS', ''),
    'excluded_words' => env('PROFANITY_EXCLUDED_WORDS', ''),
    'log_violations' => env('PROFANITY_LOG_VIOLATIONS', true),
];
```

### 3. Database Storage

For dynamic word management, create a migration:

```php
Schema::create('profanity_words', function (Blueprint $table) {
    $table->id();
    $table->string('word')->unique();
    $table->string('language')->default('en');
    $table->boolean('is_active')->default(true);
    $table->timestamps();
});
```

## Frontend Integration Details

### 1. Nickname Validation (index.blade.php)

```javascript
// Real-time validation as user types
document.getElementById('nickname').addEventListener('input', function(e) {
    const nickname = e.target.value.trim();
    const helpText = document.getElementById('nicknameHelp');
    
    if (containsProfanity(nickname)) {
        e.target.classList.add('is-invalid');
        helpText.textContent = 'Please choose a different nickname. This contains inappropriate content.';
        helpText.style.color = '#dc3545';
    } else {
        e.target.classList.remove('is-invalid');
        helpText.textContent = 'Your nickname is how others will see you in the chat.';
        helpText.style.color = '#6c757d';
    }
});

// Form submission validation
document.getElementById('chatForm').addEventListener('submit', function(e) {
    const nicknameInput = document.getElementById('nickname');
    const nickname = nicknameInput.value.trim();
    
    if (containsProfanity(nickname)) {
        e.preventDefault();
        alert('Please choose a different nickname. The nickname you entered contains inappropriate content.');
        nicknameInput.focus();
        return false;
    }
});
```

### 2. Message Validation (userlogin.blade.php)

```javascript
// Send message validation
function sendMessageToTab(event, username) {
    event.preventDefault();
    const messageInput = document.getElementById(`messageInput_${username}`);
    const messageText = messageInput.value.trim();
    
    if (messageText) {
        // Check for profanity before sending
        if (containsProfanity(messageText)) {
            alert('Your message contains inappropriate language. Please modify your message and try again.');
            messageInput.focus();
            return false;
        }
        
        // Apply profanity filter as double protection
        const filteredMessage = filterProfanity(messageText);
        // ... continue with message sending
    }
}

// Real-time input validation
function validateMessageInput(input) {
    const messageText = input.value;
    const sendButton = input.closest('form').querySelector('button[type="submit"]');
    
    if (containsProfanity(messageText)) {
        input.style.borderColor = '#dc3545';
        input.style.backgroundColor = '#f8d7da';
        sendButton.disabled = true;
        sendButton.style.opacity = '0.5';
    } else {
        input.style.borderColor = '#ced4da';
        input.style.backgroundColor = '#ffffff';
        sendButton.disabled = false;
        sendButton.style.opacity = '1';
    }
}
```

## Security Considerations

1. **Client-side validation is not secure**: Always validate on the server-side
2. **Double filtering**: Apply filtering both on client and server sides
3. **Logging**: Monitor profanity attempts for security analysis
4. **Rate limiting**: Implement rate limiting for users who repeatedly attempt to use profanity
5. **Word list updates**: Regularly update the profanity word list

## Performance Considerations

1. **Regex optimization**: Word boundary matching prevents false positives
2. **Caching**: Consider caching filtered content for repeated text
3. **Async validation**: For real-time validation, consider debouncing input events
4. **Database indexing**: If storing words in database, ensure proper indexing

## Maintenance

1. **Regular updates**: Keep the word list updated with new slang and variations
2. **False positive monitoring**: Monitor for legitimate words being flagged
3. **Language expansion**: Add support for additional languages as user base grows
4. **Performance monitoring**: Monitor the impact on application performance

## Troubleshooting

### Common Issues

1. **False positives**: Use word boundaries in regex patterns
2. **Performance**: Optimize word list and regex patterns
3. **Unicode support**: Ensure proper handling of non-ASCII characters
4. **Case sensitivity**: All comparisons should be case-insensitive

### Testing

```php
// Unit tests example
class ProfanityFilterTest extends TestCase
{
    public function testDetectsProfanity()
    {
        $this->assertTrue(ProfanityFilter::containsProfanity('This contains bad word'));
        $this->assertFalse(ProfanityFilter::containsProfanity('This is clean text'));
    }
    
    public function testFiltersProfanity()
    {
        $filtered = ProfanityFilter::filterProfanity('This contains bad word');
        $this->assertStringContains('***', $filtered);
    }
}
```

This comprehensive profanity filtering system provides multiple layers of protection while maintaining flexibility for different use cases and requirements.