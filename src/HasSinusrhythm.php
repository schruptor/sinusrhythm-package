<?php

namespace Schruptor\Sinusrhythm;

use Schruptor\Sinusrhythm\Sinusrhythm;

trait HasSinusrhythm
{
    public function __destruct()
    {
        Sinusrhythm::ping($this->uuid);
    }
}
