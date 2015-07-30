<?php

namespace Directory\Domains\Citizen\Jobs;

use Illuminate\Http\Request;
use Directory\Foundation\AbstractJob;
use Directory\Domains\Citizen\Validators\CitizenCreationValidator as Validator;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class ValidateCitizenCreationInputJob extends AbstractJob
{
    public function handle(Validator $validator, Request $request)
    {
        return $validator->validate($request->all());
    }
}
