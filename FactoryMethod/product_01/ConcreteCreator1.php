<?php
/**
 * CreatorClass継承クラス（この子クラスでプロダクトのインスタンスを作成）
 * @author atomo
 *
 */
class ConcreteCreator1 extends CreatorClass {
	private $names = array(); // 所持者格納用
	
	/**
	 * プロダクトインスタンスを生成
	 * @see CreatorClass::createProduct()
	 */
	protected function createProduct($name) {
		return new ConcreteProduct1($name);
	}
	
	/**
	 * プロダクトオブジェクトから所持者を格納
	 * @see CreatorClass::registerProduct()
	 */
	protected function registerProduct(ProductClass $product) {
		$this->names = $product->getName();
	}
	
	/**
	 * 所持者の取得
	 */
	public function getNames() {
		return $this->names;
	}
}