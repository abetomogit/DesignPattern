<?php
include './Strategy/ContextClass.php';
include './Strategy/StrategyInterface.php';
include './Strategy/ConcreteStrategy1.php';
include './Strategy/ConcreteStrategy2.php';
include './Strategy/ConcreteStrategy3.php';
include './Strategy/ConcreteStrategy4.php';

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
$con = new Context($subtraction);
// 計算結果を受け取る
$result = $con->calculate(50, 20);

// 計算結果を表示する
isArrayDisplay($result);