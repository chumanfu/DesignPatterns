<?php

use DesignPatterns\Utils\UtilsHelper;

class UtilsOutputTest extends PHPUnit_Framework_TestCase
{
    public function testPrintHello()
    {
        $this->expectOutputString("Hello\r\n");

        UtilsHelper::print('Hello');
    }

    public function testPrintEmpty()
    {
        $this->expectOutputString("\r\n");

        UtilsHelper::print();

    }    
}