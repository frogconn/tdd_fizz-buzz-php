<?php

class FizzBuzz
{

    public function count($number)
    {
    	if($number == 3){
    		return "Fizz";
    	}
        return $number;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

	public function testSholdBeFizzWithThree(){
		$fizzbuzz = new FizzBuzz();
		$this->assertEquals("Fizz",$fizzbuzz->count(3));
	}

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
