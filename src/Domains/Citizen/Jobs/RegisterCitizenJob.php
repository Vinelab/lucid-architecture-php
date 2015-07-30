<?php

namespace Directory\Domains\Citizen\Jobs;

use Directory\Foundation\AbstractJob;
use Directory\Data\Repositories\CitizenRepository;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class RegisterCitizenJob extends AbstractJob
{
    private $name;
    private $email;
    private $occupation;
    private $ssn;
    private $address;

    public function __construct($name, $email, $occupation, $ssn, $address)
    {
        $this->ssn = $ssn;
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;
        $this->occupation = $occupation;
    }

    public function handle(CitizenRepository $citizens)
    {
        return $citizens->register(
            $this->name,
            $this->email,
            $this->ssn,
            $this->occupation,
            $this->address
        );
    }
}
