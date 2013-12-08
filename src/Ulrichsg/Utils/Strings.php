<?php

namespace Ulrichsg\Utils;

class Strings {

	/**
	 * Transforms a snake_case string into camelCase. Leading and trailing underscores are preserved.
	 * 
	 * @param string $string
	 * @return $string
	 */
	public static function toCamelCase($string) {
		return preg_replace_callback('/(.)_([[:lower:]])/', function($match) {
			return $match[1].ucfirst($match[2]);
		}, $string);
	}

	/**
	 * Transforms a camelCase string into snake_case.
	 *
	 * @param string $string
	 * @return $string
	 */
	public static function toSnakeCase($string) {
		return preg_replace_callback('/([[:^upper:]])([[:upper:]])/', function($match) {
			return $match[1].'_'.lcfirst($match[2]);
		}, $string);
	}
}
