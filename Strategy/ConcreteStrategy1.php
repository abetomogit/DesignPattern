<?php
/**
 * 加算
 */
class Addition implements Arithmetic  {
	/**
	 * @see Arithmetic::calculate()
	 */
	function calculate($num, $targetNum) {
		$summation = $num + $targetNum;
		return $summation;
	}
}