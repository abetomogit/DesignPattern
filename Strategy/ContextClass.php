<?php
/**
 * コンテクスト
 * 算術を受け取り計算結果を返す
 */
class Context {
	private $arithmetic;

	/**
	 * 初期化
	 * @param Strategy $strategy
	 * 算術を受け取る
	 */
	public function __construct(Arithmetic $arithmetic) {
		$this->arithmetic = $arithmetic;
	}

	/**
	 * 取得した算術で計算
	 * @param int $num 			// 数
	 * @param int $targetNum 	// 数（される方）
	 */
	public function calculate($num, $targetNum) {
		return $this->arithmetic->calculate($num, $targetNum);
	}
}