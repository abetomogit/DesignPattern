<?php
/**
 * 減算
 */
class Subtraction implements Arithmetic  {
	/**
	 * @see Arithmetic::calculate()
	 */
	function calculate($num, $targetNum) {
		$difference = $num - $targetNum;
		return $difference;
	}
}