<?php

namespace Directory\Foundation;

use Exception;
use Illuminate\Validation\Validator as IlluminateValidator;

/**
 * @author Abed Halawi <abed.halawi@vinelab.com>
 */
class InvalidInputException extends Exception
{
    public function __construct($message = '', $code = 0, Exception $previous = null)
    {
        if ($message instanceof IlluminateValidator) {
            $message = $message->messages()->all();
        }

        if (is_array($message)) {
            $message = implode("\n", $message);
        }

        parent::__construct($message, $code, $previous);
    }
}
