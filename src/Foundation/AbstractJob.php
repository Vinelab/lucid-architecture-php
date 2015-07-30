<?php

namespace Directory\Foundation;

use Framework\Jobs\Job;
use Illuminate\Contracts\Bus\SelfHandling;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
abstract class AbstractJob extends Job implements SelfHandling
{
}
