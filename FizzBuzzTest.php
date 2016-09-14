<?php

class FizzBuzz
{

    public function count($number)
    {
        return 1;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
    public function testShouldBeOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("1", $fizzbuzz->count(1));
    }
}
