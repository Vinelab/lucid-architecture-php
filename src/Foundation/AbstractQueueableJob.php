<?php

namespace Directory\Foundation;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class AbstractQueueableJob extends AbstractJob implements ShouldQueue
{
    use SerializesModels;
    use InteractsWithQueue;
}
