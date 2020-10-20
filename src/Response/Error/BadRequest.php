<?php

namespace Primitive\Response\Response\Error;

use Illuminate\Contracts\Support\Responsable;

class BadRequest implements Responsable
{
    private string $message;

    public function __construct(string $message)
    {
        $this->message = $message;
    }

    public function toResponse($request)
    {
        return response(
            $this->message,
            $this->status()
        );
    }

    public function status(): int
    {
        return 400;
    }
}