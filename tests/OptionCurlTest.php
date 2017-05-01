<?php

class OptionCurlTest extends PHPUnit_Framework_TestCase
{
    public function testNewClassSuccess()
    {
        $clases = [
            "PhpTools\LibCurl\Core\Option\ArrayOption",
            "PhpTools\LibCurl\Core\Option\BoolOption",
            "PhpTools\LibCurl\Core\Option\CallableOption",
            "PhpTools\LibCurl\Core\Option\IntOption",
            "PhpTools\LibCurl\Core\Option\ResourceOption",
            "PhpTools\LibCurl\Core\Option\StringOption",
        ];

        foreach ($clases as $class) {
            $object = new $class;
            $this->assertInstanceOf($class, $object);
        }
    }
}
