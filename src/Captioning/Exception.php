<?php

namespace Captioning;

class Exception extends \Exception
{
    public function __construct($message = "", $code = 0, \Exception $previous = null)
    {
        $message = sprintf('Error: %s', $message);
        \Exception::__construct($message, $code, $previous);
    }
}

