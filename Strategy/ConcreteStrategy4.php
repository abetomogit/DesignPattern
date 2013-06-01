<?php
/**
 * 除算
 */
class Division implements Arithmetic  {
	private $num;
	private $targetNum;

	/**
	 * @see Arithmetic::calculate()
	 */
	function calculate($num, $targetNum) {
		$this->num = $num;
		$this->targetNum = $targetNum;

		$result = array();
		$result["quotient"] = $this->num / $this->targetNum;
		$result["remainder"] = $this->remainder();

		return $result;
	}

	/**
	 * 余りを求める
	 * @return int $remainder 	// 余り
	 */
	private function remainder() {
		$remainder = $this->num % $this->targetNum;
		return $remainder;
	}
}