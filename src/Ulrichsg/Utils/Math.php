<?php

namespace Ulrichsg\Utils;

final class Math {

	/**
	 * Returns true iff x is odd.
	 *
	 * @param int $x
	 * @return boolean
	 */
	public static function odd($x) {
		return $x % 2 == 1;
	}

	/**
	 * Returns true iff x is even.
	 *
	 * @param int $x
	 * @return int
	 */
	public static function even($x) {
		return $x % 2 == 0;
	}

	/**
	 * Computes the greatest common divisor of x and y.
	 * 
	 * @param int $x
	 * @param int $y
	 * @return int
	 */
	public static function gcd($x, $y) {
		if ($y == 0) {
			return $x;
		}
		return self::gcd($y, $x % $y);
	}

	/**
	 * Computes the least common multiple of x and y.
	 *
	 * @param int $x
	 * @param int $y
	 * @return int
	 */
	public static function lcm($x, $y) {
		return $x * $y / self::gcd($x, $y);
	}
}
