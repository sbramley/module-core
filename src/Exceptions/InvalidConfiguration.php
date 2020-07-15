<?php

namespace TMS\Common\Exceptions;

use Exception;

class InvalidConfiguration extends Exception
{
    // This is an example.
    // Adapt this to yur config validation checks!
    public static function versionNotSpecified()
    {
        return new static('You must provide a valid version.');
    }
}
