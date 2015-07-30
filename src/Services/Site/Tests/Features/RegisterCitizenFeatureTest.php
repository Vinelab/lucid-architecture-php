<?php

namespace Directory\Services\Site\Tests\Features;

use Faker\Factory as Faker;
use Directory\Foundation\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class RegisterCitizenFeatureTest extends TestCase
{
    use WithoutMiddleware;

    public function test_registering_citizen()
    {
        $fake = Faker::create();

        $name = $fake->name;
        $email = $fake->email;
        $ssn = $fake->randomNumber;
        $occupation = $fake->word;
        $address = $fake->address;

        $this->post('/site/citizens', [
            'name' => $name,
            'email' => $email,
            'ssn' => $ssn,
            'occupation' => $occupation,
            'address' => $address,
        ])->seeJson([
            'name' => $name,
            'email' => $email,
            'ssn' => $ssn,
            'occupation' => $occupation,
            'address' => $address,
        ]);
    }
}
