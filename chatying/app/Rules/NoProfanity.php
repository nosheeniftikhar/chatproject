<?php

namespace App\Rules;

use App\Helpers\ProfanityFilter;
use Illuminate\Contracts\Validation\Rule;

class NoProfanity implements Rule
{
    protected $message;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($message = null)
    {
        $this->message = $message ?? 'The :attribute contains inappropriate language and cannot be accepted.';
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if (empty($value)) {
            return true;
        }

        return !ProfanityFilter::containsProfanity($value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return $this->message;
    }
}