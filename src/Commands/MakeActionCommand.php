<?php

namespace Kobalt\MakeAction\Commands;

use Illuminate\Console\GeneratorCommand;
use Illuminate\Console\Concerns\CreatesMatchingTest;

class MakeActionCommand extends GeneratorCommand
{
    use CreatesMatchingTest;

    protected $name = 'make:action';

    public $description = 'Create a new Action class';

    protected $type = 'Action';

    /**
     * Get the stub file for the generator.
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/../../resources/stubs/action.stub';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param  string  $rootNamespace
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Actions';
    }
}
