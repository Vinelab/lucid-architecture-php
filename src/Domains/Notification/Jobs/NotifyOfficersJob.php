<?php

namespace Directory\Domains\Notification\Jobs;

use Event;
use Directory\Foundation\AbstractQueueableJob;

class NotifyOfficersJob extends AbstractQueueableJob
{
    private $notification;

    public function __construct($notification)
    {
        $this->notification = $notification;
    }

    public function handle()
    {
        // listeners access the citizen using $notification->citizen
        Event::fire($this->notification);
    }
}
