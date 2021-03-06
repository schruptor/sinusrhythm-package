<?php

namespace Schruptor\Sinusrhythm;

use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Ramsey\Uuid\Lazy\LazyUuidFromString;
use Schruptor\Sinusrhythm\Exceptions\EmptyStringGiven;

class Sinusrhythm
{
    /**
     * @throws EmptyStringGiven
     */
    public static function ping(string $uuid, ?int $count = null): Response
    {
        throw_if($uuid === '', new EmptyStringGiven());

        $uuid = new LazyUuidFromString($uuid);

        return Http::send('GET', "https://sinusrhythm.dev/ping/$uuid" . ($count !== null ? "?count=$count" : ''));
    }
}
