<?php

namespace Saeed\CustomApi;

use Illuminate\Support\ServiceProvider;
use Saeed\CustomApi\Commands\ApiMakeServiceCommand;
use Saeed\CustomApi\Response\ApiResponseBuilder;
use \Saeed\CustomApi\Commands\ApiRequestMakeCommand;
class customApiServiceProvider extends ServiceProvider
{

    public function register(): void
    {
        $this->app->bind('apiResponse',function (){
            return new ApiResponseBuilder();
        });

        $this->commands([ApiRequestMakeCommand::class]);
        $this->commands([ApiMakeServiceCommand::class]);
    }
}
