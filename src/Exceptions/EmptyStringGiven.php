<?php

namespace Schruptor\Sinusrhythm\Exceptions;

use Exception;

class EmptyStringGiven extends Exception
{
    public function __construct()
    {
        parent::__construct('Please provide a valid uuid for the heartbeat.');
    }
}
