<?php

namespace Saeed\CustomApi\Services;

class ServiceResult
{
    public function __construct(public bool $ok, public mixed $data = null){}
}
