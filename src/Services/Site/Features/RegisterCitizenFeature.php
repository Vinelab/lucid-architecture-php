<?php

namespace Directory\Services\Site\Features;

use Illuminate\Http\Request;
use Directory\Foundation\AbstractFeature;
use Directory\Domains\Http\Jobs\RespondWithJsonJob;
use Directory\Domains\Citizen\Jobs\RegisterCitizenJob;
use Directory\Domains\Notification\Jobs\NotifyOfficersJob;
use Directory\Domains\Citizen\Jobs\ValidateCitizenCreationInputJob;
use Directory\Domains\Notification\Notifications\CitizenCreatedNotification;

/**
 * Implements the feature of registering a citizen inside
 * the national directory.
 *
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class RegisterCitizenFeature extends AbstractFeature
{
    public function handle(Request $request)
    {
        $input = $request->input();

        $this->run(ValidateCitizenCreationInputJob::class, compact('input'));
        $citizen = $this->run(RegisterCitizenJob::class, $request);
        $this->runInQueue(NotifyOfficersJob::class, ['notification' => new CitizenCreatedNotification($citizen)]);

        return $this->run(RespondWithJsonJob::class, ['content' => $citizen]);
    }
}
