<?php

namespace Kobalt\MakeAction;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Kobalt\MakeAction\Commands\MakeActionCommand;

class MakeActionServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('make-action')
            ->hasCommand(MakeActionCommand::class);
    }
}
