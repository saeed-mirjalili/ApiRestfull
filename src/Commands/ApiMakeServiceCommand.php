<?php

namespace Saeed\CustomApi\Commands;

use Illuminate\Console\GeneratorCommand;
class ApiMakeServiceCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:apiService {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a service for logic';

    protected function getStub()
    {
        return __DIR__.'/api-service.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '/Http/Services';
    }
}
