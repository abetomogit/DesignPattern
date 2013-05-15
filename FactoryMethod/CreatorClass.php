<?php
/**
 * プロダクトインスタンス生成クラス
 * @author atomo
 *
 */
abstract class CreatorClass {
	/**
	 * プロダクトインスタンスの作成、登録
	 * @param string $name 				// この商品の所持者
	 * @return ConcreteProduct $product // プロダクトのインスタンス
	 */
	public final function create($name) {
		$product = $this->createProduct($name);
		$this->registerProduct($product);
		return $product;
	}
	
	/**
	 * プロダクトのインスタンス作成
	 * @param string $name // 商品の所持者
	 */
	protected abstract function createProduct($name);
	
	/**
	 * プロダクトの所持者を格納
	 * @param ProductClass $product
	 */
	protected abstract function registerProduct(ProductClass $product);
}