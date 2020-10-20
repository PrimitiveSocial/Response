<?php

namespace Primitive\Response\Success;

use Illuminate\Contracts\Support\Responsable;

class Created implements Responsable
{
    private string $location;
    private ?string $message;

    public function __construct(string $location, ?string $message = null)
    {
        $this->location = $location;
        $this->message = $message;
    }

    public function toResponse($request)
    {
        return response(
            $this->message,
            $this->status(),
            ['Location' => $this->location]
        );
    }

    public function status()
    {
        return 201;
    }
}