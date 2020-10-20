<?php

namespace Primitive\Response\Success;

use Illuminate\Contracts\Support\Responsable;

class Ok implements Responsable
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function toResponse($request)
    {
        return response()->json($this->data, $this->status());
    }

    public function status()
    {
        return 200;
    }
}