<?php

namespace Ulrichsg\Utils;

final class Arrays {

	/**
	 * If the key exists in the array, returns the associated value, otherwise returns the default.
	 *
	 * @param array $array
	 * @param mixed $key
	 * @param mixed $default
	 * @return mixed
	 */
	public static function get(array $array, $key, $default) {
		return array_key_exists($key, $array) ? $array[$key] : $default;
	}

	/**
	 * Like the standard function array_filter(), except that the filtering function also receives the keys as its
	 * second argument. Array keys are preserved.
	 *
	 * @param array $array
	 * @param callable $function
	 * @return array
	 */
	public static function filter(array $array, callable $function) {
		$filtered = [];
		array_walk($array, function ($value, $key) use (&$filtered, $function) {
			if ($function($value, $key)) {
				$filtered[$key] = $value;
			}
		});
		return $filtered;
	}

	/**
	 * Returns true if the array contains at least one element for which the function returns true.
	 * The function can take up to two arguments: the current element value is passed first, the key/index second.
	 *
	 * @param array $array
	 * @param callable $function
	 * @return boolean
	 */
	public static function any(array $array, callable $function) {
		foreach ($array as $key => $value) {
			if ($function($value, $key)) {
				return true;
			}
		}
		return false;
	}

	/**
	 * If array[key] exists, add the addend to its value. Otherwise, insert the pair key => addend into the array.
	 *
	 * @param array $array
	 * @param mixed $key
	 * @param int|float $value
	 */
	public static function add(array &$array, $key, $addend) {
		if (array_key_exists($key, $array)) {
			$array[$key] += $addend;
		} else {
			$array[$key] = $addend;
		}
	}
}
