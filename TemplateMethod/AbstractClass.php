<?php
abstract class AbstractClass {
	/**
	 * スタートタグ
	 */
	protected abstract function startTag();
	
	/**
	 * コンテンツタグ
	 */
	protected abstract function contentsTag();
	
	/**
	 * エンドタグ
	 */
	protected abstract function endTag();
	
	/**
	 * 表示
	 */
	final function displayTag() {
		$this->startTag();
		$this->contentsTag();
		$this->endTag();
	}
}