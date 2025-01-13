<?php

namespace Saeed\CustomApi\Response;

class ApiResponseBuilder
{
    private ApiResponse $response;

    public function __construct()
    {
        $this->response = new ApiResponse();
    }

    public function withMessage(string $msg)
    {
        $this->response->setMsg($msg);
        return $this;
    }

    public function withData(mixed $data)
    {
        $this->response->setData($data);
        return $this;
    }

    public function withStatus(int $status)
    {
        $this->response->setStatus($status);
        return $this;
    }

    public function withAppends(array $appends)
    {
        $this->response->setAppends($appends);
        return $this;
    }

    public function build(): ApiResponse
    {
        return $this->response;
    }
}
