<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class PhoneOrEmail implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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
        //
        // $pattern = '/^(77|73|71|70)[1-9][0-9]+/';
        $pattern = '/^(77|73|71|70)\d{7}$/';
        return preg_match($pattern, $value) || filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be a valid phone number or email address.';
    }
}
