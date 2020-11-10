<?php

namespace Kata;

use PHPUnit\Framework\TestCase;
use Kata\FizzBuzz;

class FuzzBuzzTest extends TestCase
{
    private $fizzBuzz;

    protected function setUp(): void
    {
        $this->fizzBuzz = new FizzBuzz();
    }

    public function testNumber1IsConvertedToString1(): void
    {
        $actual = $this->fizzBuzz->handle(1);

        $this->assertEquals("1", $actual);
    }

    public function testNumber2IsConvertedToString2(): void
    {
        $actual = $this->fizzBuzz->handle(2);

        $this->assertEquals("2", $actual);
    }

    public function testNumber4IsConvertedToString4(): void
    {
        $actual = $this->fizzBuzz->handle(4);

        $this->assertEquals("4", $actual);
    }

    public function testNumber3IsConvertedToStringFizz(): void
    {
        $actual = $this->fizzBuzz->handle(3);

        $this->assertEquals("Fizz", $actual);
    }

    public function testNumber6IsConvertedToStringFizz(): void
    {
        $actual = $this->fizzBuzz->handle(6);

        $this->assertEquals("Fizz", $actual);
    }

    public function testNumber9IsConvertedToStringFizz(): void
    {
        $actual = $this->fizzBuzz->handle(9);

        $this->assertEquals("Fizz", $actual);
    }

    public function testNumber12IsConvertedToStringFizz(): void
    {
        $actual = $this->fizzBuzz->handle(12);

        $this->assertEquals("Fizz", $actual);
    }
}
