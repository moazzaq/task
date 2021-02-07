<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class NewDomain implements Rule
{
    private $domain;
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct($domain)
    {
        $this->domain = $domain;
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
        if ($this->domain == 'yes' && $value == null)
             return false;
        else
            return true;

    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The new domain detail must have value';
    }
}
