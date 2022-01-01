<?php

namespace Schruptor\Sinusrhythm;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class SinusrhythmServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('sinusrhythm')
            ->hasConfigFile()
            ->hasViews();
    }
}
