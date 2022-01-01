<?php

namespace Schruptor\Sinusrhythm;

use Exception;
use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;
use Ramsey\Uuid\Lazy\LazyUuidFromString;

class Sinusrhythm
{
    /**
     * @throws Exception
     */
    public static function ping(string $uuid): ResponseInterface
    {
        $uuid = new LazyUuidFromString($uuid);

        $client = new Client([
            'base_uri' => 'https://sinusrhythm.de/ping/',
        ]);

        return $client->request('GET', (string) $uuid);
    }
}
