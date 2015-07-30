<?php

namespace Directory\Data\Repositories;

use Directory\Data\Entities\Citizen\Citizen;
use Directory\Data\Entities\Citizen\Values\SSN;
use Directory\Data\Entities\Citizen\Values\Name;
use Directory\Data\Entities\Citizen\Values\Email;
use Directory\Data\Entities\Citizen\Values\Address;
use Directory\Data\Entities\Citizen\Values\Occupation;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class CitizenRepository extends AbstractRepository
{
    private $citizen;

    public function __construct(Citizen $citizen)
    {
        $this->citizen = $citizen;

        parent::__construct($citizen);
    }

    public function register($name, $email, $ssn, $occupation, $address)
    {
        return $this->citizen->register(
            new Name($name),
            new Email($email),
            new SSN($ssn),
            new Occupation($occupation),
            new Address($address)
        );
    }
}
