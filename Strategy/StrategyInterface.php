<?php
/**
 * 算術
 */
interface Arithmetic {
	/**
	 * 計算
	 * @param int $num 			// 数
	 * @param int $targetNum 	// 数（される方）
	 */
	function calculate($num, $targetNum);
}