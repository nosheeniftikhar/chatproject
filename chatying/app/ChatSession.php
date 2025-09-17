<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ChatSession extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'session_id',
        'nickname',
        'gender',
        'age',
        'country',
        'state',
        'ip_address',
        'user_agent',
        'ended_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'ended_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'age' => 'integer',
    ];

    /**
     * Generate a unique session ID
     */
    public static function generateSessionId()
    {
        do {
            $sessionId = 'chat_' . Str::random(12);
        } while (self::where('session_id', $sessionId)->exists());
        
        return $sessionId;
    }

    /**
     * Mark this session as ended
     */
    public function markAsEnded()
    {
        $this->update(['ended_at' => now()]);
    }

    /**
     * Check if the session is active
     */
    public function isActive()
    {
        return is_null($this->ended_at);
    }

    /**
     * Scope for active sessions
     */
    public function scopeActive($query)
    {
        return $query->whereNull('ended_at');
    }

    /**
     * Scope for ended sessions
     */
    public function scopeEnded($query)
    {
        return $query->whereNotNull('ended_at');
    }
}
