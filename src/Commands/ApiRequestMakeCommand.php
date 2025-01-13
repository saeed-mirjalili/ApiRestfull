<?php

namespace Saeed\CustomApi\Commands;

use Illuminate\Console\GeneratorCommand;

class ApiRequestMakeCommand extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:apiRequest {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command creates a request form suitable for restfull-api';

    protected function getStub()
    {
        return __DIR__.'/api-request.stub';
    }

    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '/Http/ApiRequest';
    }
}
