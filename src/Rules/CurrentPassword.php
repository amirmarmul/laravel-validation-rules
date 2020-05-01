<?php

namespace Kcdev\ValidationRules\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class CurrentPassword implements Rule
{
    /**
     * Validate the given data against the provided rules.
     */
    public function validate($attribute, $value, $parameters)
    {
        return $this->passes($attribute, $value);
    }

    /**
     * Determine if the validation rule passes.
     */
    public function passes($attribute, $value)
    {
        return Hash::check($value, Auth::user()->getAuthPassword());
    }

    /**
     * Get the validation error message.
     */
    public function message()
    {
        return __('validationRules::messages.current_password');
    }
}
