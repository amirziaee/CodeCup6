<?php

use App\Controllers\HomeController;
use PHPUnit\Framework\TestCase;

final class LogturySampleTest extends TestCase
{
    public function testOne()
    {
        $class = new \ReflectionClass(HomeController::class);
        $this->assertTrue($class->hasMethod('index'));
        $this->assertTrue($class->hasMethod('about'));
        $this->assertTrue($class->hasMethod('contact'));
    }
}
