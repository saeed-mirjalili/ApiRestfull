<?php

namespace Saeed\CustomApi\Response;
class ApiResponse
{
    private ?string $msg = null;
    private mixed $data = null;
    private int $status = 200;

    private array $appends = [];

    public function setMsg(?string $msg): void
    {
        $this->msg = $msg;
    }
    public function setData(mixed $data): void
    {
        $this->data = $data;
    }
    public function setStatus(int $status): void
    {
        $this->status = $status;
    }

    public function setAppends(array $appends): void
    {
        $this->appends = $appends;
    }

    public function apiResponse()
    {
        $body = [];
        !is_null($this->msg) && $body['msg'] = $this->msg;
        !is_null($this->data) && $body['data'] = $this->data;
        $body = $body + $this->appends;
        return response()->json($body, $this->status);
    }
}
