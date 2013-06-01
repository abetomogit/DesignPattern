<?php
/**
 * 乗算
 */
class Multiplication implements Arithmetic  {
	/**
	 * @see Arithmetic::calculate()
	 */
	function calculate($num, $targetNum) {
		$product = $num * $targetNum;
		return $product;
	}
}