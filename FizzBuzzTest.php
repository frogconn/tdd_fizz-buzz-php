<?php

class FizzBuzz
{

    public function count($number)
    {
        return $number;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

	public function testSholdBeTwo(){
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals("2",$fizzbuzz->count(2));
	}

    public function testShouldBeOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("1", $fizzbuzz->count(1));
    }

}
