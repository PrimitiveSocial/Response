<?php

namespace Primitive\Response\Tests\Response\Success;

use Illuminate\Contracts\Support\Responsable;
use PHPUnit\Framework\TestCase;
use Primitive\Response\Success\Created;

class CreatedTest extends TestCase
{
    public function testWillReturn201WithLocation(): void
    {
        $location = 'https://api.test.dev/v1/users/1';
        $response = new Created($location);

        $this->assertInstanceOf(Responsable::class, $response);
        $this->assertSame(201, $response->status());
    }
}
