<?php

namespace App\Validator;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{

    public function validateAlphaCheck($attribute, $value, $parameters)
    {
        return preg_match('/^[A-Za-z]+$/', $value);
    }

    public function validateAlphaNumCheck($attribute, $value, $parameters)
    {
        return preg_match('/^[A-Za-z\d]+$/', $value);
    }

    public function validateAlphaDashCheck($attribute, $value, $parameters)
    {
        return preg_match('/^[A-Za-z\d_-]+$/', $value);
    }
}