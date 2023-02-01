<?php

namespace SalamWaddah\Tests;

use SalamWaddah\Ok\Ok;

class OkTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function ok_constant_is_ok(): void
    {
        $this->assertSame('ok', Ok::OK);
    }

    /**
     * @test
     */
    public function ok_is_ok(): void
    {
        $ok = new Ok();

        $this->assertSame('ok', $ok->ok());
    }
}