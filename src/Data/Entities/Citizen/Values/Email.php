<?php

namespace Directory\Data\Entities\Citizen\Values;

use Directory\Foundation\Value;
use Directory\Foundation\Validation;
use Directory\Data\Entities\Citizen\Values\Exceptions\InvalidCitizenEmailException;

class Email extends Value
{
    public function __construct($email)
    {
        $rules = ['email' => 'email'];
        $validation = $this->validation(compact('email'), $rules);

        if ($validation->fails()) {
            throw new InvalidCitizenEmailException($email);
        }

        $this->setValue($email);
    }
}
