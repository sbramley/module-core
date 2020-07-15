<?php

namespace TMS\Common;

class Common
{
    public function __construct()
    {
    }

    // Build wonderful things
    public function example()
    {
        return 'example output and version is: '.config('common.version');
    }

    public function echoPhrase(string $phrase): string
    {
        return $phrase;
    }
}
