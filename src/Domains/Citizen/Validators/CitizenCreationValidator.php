<?php

namespace Directory\Domains\Citizen\Validators;

use Directory\Foundation\Validator;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class CitizenCreationValidator extends Validator
{
    protected $rules = [
        'name' => 'required',
        'email' => 'required',
        'ssn' => 'required',
        'address' => 'required',
        'occupation' => 'required',
    ];
}
