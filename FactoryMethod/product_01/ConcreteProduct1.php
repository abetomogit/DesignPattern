<?php
/**
 * ProductClass継承クラス
 * @author atomo
 *
 */
class ConcreteProduct1 extends ProductClass {
	private $name; // 所持者格納用
	
	/**
	 * コンストラクタ
	 * @param string $name
	 */
	function __construct($name) {
		echo $name."さんの商品1を作ります";
		$this->name = $name;
	}
	
	/**
	 * プロダクトを使用
	 * @see ProductClass::useProduct()
	 */
	public function useProduct() {
		echo $this->name."さんの商品1を使います";
	}
	
	/**
	 * 所持者の取得
	 */
	public function getName() {
		return $this->name;
	}
}