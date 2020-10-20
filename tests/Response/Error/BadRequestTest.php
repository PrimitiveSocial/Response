<?php

namespace Primitive\Response\Tests\Response\Error;

use Illuminate\Contracts\Support\Responsable;
use PHPUnit\Framework\TestCase;
use Primitive\Response\Error\BadRequest;

class BadRequestTest extends TestCase
{
    public function testCanReturn400(): void
    {
        $message = 'This is a test';
        $response = new BadRequest($message);

        $this->assertInstanceOf(Responsable::class, $response);
        $this->assertSame(400, $response->status());
    }
}
