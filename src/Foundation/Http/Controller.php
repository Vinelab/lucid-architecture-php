<?php

namespace Directory\Foundation\Http;

use Directory\Foundation\ServesFeaturesTrait;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class Controller extends BaseController
{
    use ValidatesRequests;
    use ServesFeaturesTrait;
}
