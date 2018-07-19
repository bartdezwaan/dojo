<?php

namespace Dojo\Tests;

use Dojo\FirstClass;

class FirstTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function it_works()
    {
        $firstClass = new FirstClass();

        $this->assertTrue($firstClass->test());
    }
}