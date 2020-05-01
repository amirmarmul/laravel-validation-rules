<?php

namespace Kcdev\ValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;

class BasicPassword implements Rule
{
    /**
     * Password minimal character.
     */
    const MIN_CHARACTER = 8;

    /**
     * Validate the given data against the provided rules.
     */
    public function validate($attribute, $value, $parameters)
    {
        return $this->passes($attribute, $value);
    }

    /**
     * Register a custom validator message replacer.
     */
    public function replacer($message, $attribute, $rule, $parameters)
    {
        return str_replace(':min', static::MIN_CHARACTER, $message);
    }

    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value)
    {
        return mb_strlen($value) >= static::MIN_CHARACTER;
    }

    /**
     * Get the validation error message.
     */
    public function message()
    {
        return __('validationRules::messages.basic_password');
    }
}
