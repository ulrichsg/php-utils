<?php

use Ulrichsg\Utils\Math;

class MathTest extends PHPUnit_Framework_TestCase {

	public function testOdd() {
		$this->assertTrue(Math::odd(5));
		$this->assertFalse(Math::odd(-6));
		$this->assertFalse(Math::odd(0));
	}

	public function testEven() {
		$this->assertFalse(Math::even(5));
		$this->assertTrue(Math::even(-6));
		$this->assertTrue(Math::even(0));
	}

	public function testGcd() {
		$this->assertEquals(10, Math::gcd(20, 10));
		$this->assertEquals(4, Math::gcd(16, -12));
		$this->assertEquals(1, Math::gcd(9, 28));
		$this->assertEquals(5, Math::gcd(5, 0));
		$this->assertEquals(5, Math::gcd(0, 5));
		$this->assertEquals(0, Math::gcd(0, 0));
	}

	public function testLcm() {
		$this->assertEquals(36, Math::lcm(12, 18));
		$this->assertEquals(90, Math::lcm(10, 9));
		$this->assertEquals(0, Math::lcm(5, 0));
		$this->assertEquals(0, Math::lcm(0, 5));
	}
}
