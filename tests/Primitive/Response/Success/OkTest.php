<?php

namespace Primitive\Response\Tests\Primitive\Response\Success;

use Illuminate\Contracts\Support\Responsable;
use PHPUnit\Framework\TestCase;
use Primitive\Response\Success\Ok;

class OkTest extends TestCase
{
    public function testWillReturn200()
    {
        $data = [];
        $response = new Ok($data);

        $this->assertInstanceOf(Responsable::class, $response);
        $this->assertSame(200, $response->status());
    }
}
