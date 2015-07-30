<?php

namespace Directory\Services\Site\Http\Controllers;

use Directory\Foundation\Http\Controller;
use Directory\Services\Site\Features\RegisterCitizenFeature;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class CitizenController extends Controller
{
    public function register()
    {
        return $this->serve(RegisterCitizenFeature::class);
    }
}
