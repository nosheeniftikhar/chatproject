<?php

namespace App\Helpers;

class ProfanityFilter
{
    /**
     * Comprehensive multilingual profanity word list
     * 
     * @var array
     */
    private static $profanityWords = [
        // English profanity and inappropriate words
        'fuck', 'shit', 'bitch', 'asshole', 'damn', 'crap', 'piss', 'dick', 'cock', 'pussy', 'cunt', 'whore', 'slut', 'bastard', 'motherfucker',
        'nigger', 'nigga', 'faggot', 'retard', 'gay', 'lesbian', 'homo', 'queer', 'tranny', 'dyke',
        'sex', 'porn', 'xxx', 'nude', 'naked', 'boobs', 'tits', 'ass', 'butt', 'penis', 'vagina', 'orgasm', 'masturbate', 'cum', 'sperm',
        'rape', 'molest', 'pedophile', 'incest', 'bdsm', 'fetish', 'kinky', 'horny', 'erotic', 'vibrator', 'dildo',
        'kill', 'murder', 'suicide', 'bomb', 'terrorist', 'nazi', 'hitler', 'drugs', 'cocaine', 'heroin', 'weed', 'marijuana',
        
        // Hindi/Urdu profanity
        'gand', 'gandu', 'chutiya', 'madarchod', 'bhenchod', 'behenchod', 'randi', 'randwa', 'kamina', 'kutta', 'kutiya',
        'saala', 'saali', 'harami', 'haramkhor', 'chod', 'chodna', 'chudai', 'lund', 'loda', 'phuddi', 'choot', 'gaandu',
        'bhosda', 'bhosadi', 'raand', 'chinaal', 'pataka', 'item', 'maal', 'sexy', 'hot', 'nangi', 'nanga',
        'chus', 'choos', 'chusna', 'choosa', 'suck', 'sucker', 'bhabi', 'bhabhi', 'aunty', 'uncle',
        
        // Arabic profanity
        'haram', 'hara', 'kalb', 'klab', 'kus', 'tiz', 'air', 'khara', 'ibn', 'sharmouta', 'kahba',
        
        // Spanish profanity
        'puta', 'puto', 'mierda', 'joder', 'coño', 'cabrón', 'pendejo', 'gilipollas', 'hijo', 'perra',
        'maricón', 'bollera', 'tortillera', 'pajero', 'follar', 'sexo', 'desnudo', 'tetas', 'culo',
        
        // French profanity
        'merde', 'putain', 'salope', 'connard', 'pédé', 'tapette', 'enculé', 'baiser', 'chatte', 'bite',
        'cul', 'nichons', 'seins', 'nue', 'sexe', 'bordel',
        
        // German profanity
        'scheiße', 'scheisse', 'verdammt', 'arschloch', 'fotze', 'hure', 'nutte', 'schwanz', 'muschi',
        'titten', 'nackt', 'ficken', 'bumsen', 'schwul', 'lesbe',
        
        // Italian profanity
        'merda', 'cazzo', 'fica', 'puttana', 'troia', 'stronzo', 'fottere', 'scopare', 'nudo', 'tette',
        
        // Russian profanity (transliterated)
        'suka', 'blyad', 'pizda', 'khuy', 'mudak', 'govno', 'yebat', 'trakhat', 'goliy', 'siski',
        
        // Portuguese profanity
        'merda', 'porra', 'caralho', 'buceta', 'puta', 'filho', 'foder', 'transar', 'pelado', 'peitos',
        
        // Other inappropriate terms
        'virgin', 'slut', 'whore', 'prostitute', 'escort', 'hooker', 'stripper', 'cam', 'webcam', 'onlyfans',
        'dating', 'hookup', 'one', 'night', 'stand', 'fwb', 'netflix', 'chill', 'dtf', 'nsa',
        'top', 'bottom', 'dom', 'sub', 'daddy', 'mommy', 'master', 'slave', 'mistress',
        'licking', 'sucking', 'fingering', 'touching', 'groping', 'fondling', 'caressing', 'kissing',
        'blowjob', 'handjob', 'footjob', 'rimjob', 'anal', 'oral', 'threesome', 'gangbang', 'orgy',
        
        // Leetspeak and variations
        'f*ck', 'f**k', 'f***', 'sh*t', 'sh**', 'b*tch', 'b**ch', 'a**hole', 'a****le',
        'fuk', 'fck', 'fvck', 'phuck', 'shyt', 'sht', 'biatch', 'biotch', 'azz',
        's3x', 'p0rn', 'pr0n', 'n00ds', 'b00bs', 't1ts', 'a55', 'p3n15', 'v4g1n4',
        
        // Numbers/symbols used inappropriately
        '69', '420', '18+', 'nsfw', 'xxx',
        
        // Common misspellings and variations
        'phuk', 'phuck', 'shiet', 'shieet', 'bytch', 'byatch', 'azhole', 'azz hole',
        'fukc', 'fcuk', 'fuk', 'shiit', 'shiet', 'btch', 'biatch', 'hore', 'wh0re',
        
        // Regional slang and variations
        'thot', 'simp', 'incel', 'chad', 'karen', 'boomer', 'zoomer', 'milf', 'dilf',
        'smash', 'bang', 'tap', 'hit', 'pipe', 'rail', 'pound', 'drill', 'slam'
    ];

    /**
     * Check if text contains profanity
     *
     * @param string $text
     * @return bool
     */
    public static function containsProfanity($text)
    {
        if (empty($text)) {
            return false;
        }

        $text = strtolower(trim($text));
        
        foreach (self::$profanityWords as $word) {
            // Use word boundaries to avoid false positives
            if (preg_match('/\b' . preg_quote($word, '/') . '\b/i', $text)) {
                return true;
            }
        }
        
        return false;
    }

    /**
     * Filter profanity from text by replacing with asterisks
     *
     * @param string $text
     * @return string
     */
    public static function filterProfanity($text)
    {
        if (empty($text)) {
            return $text;
        }

        $filteredText = $text;
        
        foreach (self::$profanityWords as $word) {
            // Use word boundaries to avoid false positives
            $pattern = '/\b' . preg_quote($word, '/') . '\b/i';
            $replacement = str_repeat('*', strlen($word));
            $filteredText = preg_replace($pattern, $replacement, $filteredText);
        }
        
        return $filteredText;
    }

    /**
     * Validate input and return filtered text
     *
     * @param string $text
     * @param bool $strict - if true, reject text with profanity; if false, filter it
     * @return array ['valid' => bool, 'text' => string, 'message' => string]
     */
    public static function validate($text, $strict = true)
    {
        if (empty($text)) {
            return [
                'valid' => true,
                'text' => $text,
                'message' => ''
            ];
        }

        $containsProfanity = self::containsProfanity($text);
        
        if ($strict && $containsProfanity) {
            return [
                'valid' => false,
                'text' => $text,
                'message' => 'The text contains inappropriate language and cannot be accepted.'
            ];
        }
        
        return [
            'valid' => true,
            'text' => self::filterProfanity($text),
            'message' => $containsProfanity ? 'Some words have been filtered from your input.' : ''
        ];
    }

    /**
     * Add custom words to the profanity list
     *
     * @param array $words
     * @return void
     */
    public static function addWords(array $words)
    {
        self::$profanityWords = array_merge(self::$profanityWords, array_map('strtolower', $words));
        self::$profanityWords = array_unique(self::$profanityWords);
    }

    /**
     * Remove words from the profanity list
     *
     * @param array $words
     * @return void
     */
    public static function removeWords(array $words)
    {
        self::$profanityWords = array_diff(self::$profanityWords, array_map('strtolower', $words));
    }

    /**
     * Get the current profanity word list
     *
     * @return array
     */
    public static function getWordList()
    {
        return self::$profanityWords;
    }

    /**
     * Clear the profanity word list
     *
     * @return void
     */
    public static function clearWordList()
    {
        self::$profanityWords = [];
    }

    /**
     * Reset to default word list
     *
     * @return void
     */
    public static function resetWordList()
    {
        // Re-instantiate the class to reset to defaults
        $reflection = new \ReflectionClass(self::class);
        $property = $reflection->getProperty('profanityWords');
        $property->setAccessible(true);
        $property->setValue(null, $reflection->getDefaultProperties()['profanityWords']);
    }
}