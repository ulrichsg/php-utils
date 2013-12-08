<?php

use Ulrichsg\Utils\Strings;

class StringsTest extends PHPUnit_Framework_TestCase {

	public function testToCamelCase() {
		$this->assertEquals('_camelCase_', Strings::toCamelCase('_camel_case_'));
	}

	public function testToSnakeCase() {
		$this->assertEquals('_snake_case_', Strings::toSnakeCase('_snakeCase_'));
	}
}
