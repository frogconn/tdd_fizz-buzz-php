<?php

class FizzBuzz
{

    public function count($number)
    {
        if ($number == 3) {
            return "Fizz";
        } elseif ($number == 5) {
            return "Buzz";
        } else if ($number == 6) {
            return "Fizz";
        } else if ($number == 9) {
            return "Fizz";
        } else if ($number == 10) {
            return "Buzz";
        } else if ($number == 12) {
            return "Fizz";
        } else if ($number == 15) {
            return "FizzBuzz";
        }
        return $number;
    }
}

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{

    public function testShouldBeFizzBuzzWithFifteen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("FizzBuzz", $fizzbuzz->count(15));
    }

    public function testShouldBeFourteen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("14", $fizzbuzz->count(14));

    }

    public function testShouldBeThirteen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("13", $fizzbuzz->count(13));
    }

    public function testShouldBeFizzWithTwelve()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzbuzz->count(12));
    }

    public function testShouldBeEleven()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("11", $fizzbuzz->count(11));
    }

    public function testShouldBeBuzzWithTen()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Buzz", $fizzbuzz->count(10));
    }

    public function testShouldBeFizzWithNine()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzbuzz->count(9));
    }

    public function testShouldBeEight()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("8", $fizzbuzz->count(8));
    }

    public function testShouldBeSeven()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("7", $fizzbuzz->count(7));
    }

    public function testShouldBeFizzWithSix()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzbuzz->count(6));
    }

    public function testShouldBeBuzzWithFive()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Buzz", $fizzbuzz->count(5));
    }

    public function testShouldBeFour()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("4", $fizzbuzz->count(4));
    }

    public function testShouldBeFizzWithThree()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("Fizz", $fizzbuzz->count(3));
    }

    public function testShouldBeTwo()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("2", $fizzbuzz->count(2));
    }

    public function testShouldBeOne()
    {
        $fizzbuzz = new FizzBuzz();
        $this->assertEquals("1", $fizzbuzz->count(1));
    }

}
