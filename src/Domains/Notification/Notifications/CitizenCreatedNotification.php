<?php

namespace Directory\Domains\Notification\Notifications;

use Directory\Foundation\Notification;
use Directory\Data\Entities\Citizen\Citizen;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class CitizenCreatedNotification extends Notification
{
    public $citizen;

    public function __construct(Citizen $citizen)
    {
        $this->citizen = $citizen;
    }
}
