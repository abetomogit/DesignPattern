<?php
/** ===================================================
 * 2013/06/01
 * ストラテジーパターン
 * 算術を戦術に見立て、切り替えが出来るようにする
 * =================================================== */

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

/**
 * 配列かどうかを判定し表示
 * @param array or int $target
 */
function isArrayDisplay($target) {
	if (is_array($target)) {
		foreach ($target as $num) {
			echo $num."<br>";
		}
	} else {
		echo $target;
	}
}

$addition       = new Addition();			// 加算
$subtraction    = new Subtraction();		// 減算
$multiplication = new Multiplication();		// 乗算
$division       = new Division();			// 除算:余り

// コンテクストに算術を渡す
$con = new Context($division);
// 計算結果を受け取る
$result = $con->calculate(50, 20);

// 計算結果を表示する
isArrayDisplay($result);

?>
