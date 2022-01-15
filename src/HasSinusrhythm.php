<?php

namespace Schruptor\Sinusrhythm;

trait HasDefaultSinusrhythm
{
    public function __destruct()
    {
        Sinusrhythm::ping($this->uuid);
    }
}
