<?php

use Schruptor\Sinusrhythm\Sinusrhythm;

it('can test', function () {
    $respone = Sinusrhythm::ping('58edd5a9-076d-411b-bc88-965fc969a679');

    expect($respone->getStatusCode())->toBe(200);
});
