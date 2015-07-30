<?php

namespace Directory\Data\Entities\Citizen;

use Directory\Foundation\Entity;
use Directory\Data\Entities\Citizen\Values\SSN;
use Directory\Data\Entities\Citizen\Values\Name;
use Directory\Data\Entities\Citizen\Values\Email;
use Directory\Data\Entities\Citizen\Values\Address;
use Directory\Data\Entities\Citizen\Values\Occupation;

/**
 * The Citizen entity.
 *
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class Citizen extends Entity
{
    protected $fillable = ['name', 'email', 'address', 'ssn', 'occupation'];

    public function register(
        Name $name,
        Email $email,
        SSN $ssn,
        Occupation $occupation,
        Address $address
    ) {
        return new static(
            [
                'ssn' => (int) $ssn->getValue(),
                'name' => (string) $name,
                'email' => (string) $email,
                'address' => (string) $address,
                'occupation' => (string) $occupation,
            ]
        );
    }
}
