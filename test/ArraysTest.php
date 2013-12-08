<?php

use Ulrichsg\Utils\Arrays;

class ArraysTest extends PHPUnit_Framework_TestCase {

	public function testGet() {
		$array = ['foo' => 42, 'quux' => null];
		$this->assertEquals(42, Arrays::get($array, 'foo', 1337));
		$this->assertEquals(1337, Arrays::get($array, 'bar', 1337));
		$this->assertNull(Arrays::get($array, 'quux', 1337));
	}

	public function testFilterByValues() {
		$array = Arrays::filter([1, 2], function($value) { return $value % 2 == 0; });
		$this->assertEquals(1, count($array));
		$this->assertEquals(2, current($array));
	}
	
	public function testFilterByKeys() {
		$array = Arrays::filter(['a', 'b', 'c', 'd'], function ($value, $index) { return $index % 2 == 1; });
		$this->assertEquals(2, count($array));
		$this->assertEquals('b', $array[1]);
		$this->assertEquals('d', $array[3]);
	}

	public function testAny() {
		$this->assertTrue(Arrays::any([1, 2, 3], function ($n) { return $n % 2 == 1; }));
		$this->assertFalse(Arrays::any([1, 2, 3], function ($n, $k) { return $k > 10; }));
	}

	public function testAdd() {
		$array = ['foo' => 40];
		Arrays::add($array, 'foo', 2);
		Arrays::add($array, 'bar', 1337);
		$this->assertEquals(42, $array['foo']);
		$this->assertEquals(1337, $array['bar']);
	}
}
