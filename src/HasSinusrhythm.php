<?php

namespace Schruptor\Sinusrhythm;

trait HasSinusrhythm
{
    public function __destruct()
    {
        Sinusrhythm::ping($this->uuid);
    }
}
