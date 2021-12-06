<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class CheckEmailHpRule implements Rule
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
        if(is_numeric(substr($value, 0, 1))){
            $code = substr($value, 0, 2);
            
            if(filter_var($value, FILTER_VALIDATE_EMAIL)){
                return true;
            }
            if(strlen($value) > 9 && ($code == "02" || $code == "08")){
                return true;
            }
        }else{
            if(filter_var($value, FILTER_VALIDATE_EMAIL)){
                return true;
            }
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Format alamat email/No. HP Anda tidak sesuai';
    }
}
