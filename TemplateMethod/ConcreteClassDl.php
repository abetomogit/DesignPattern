<?php
class ConcreteClassDl extends AbstractClass {
	private $str;	// タグ内文字格納
	
	/**
	 * コンストラクタ
	 * @param string $str 	// タグ内文字
	 */
	function __construct($str) {
		$this->str = $str;
	}
	
	/**
	 * スタートタグ
	 * @see AbstractClass::startTag()
	 */
	protected function startTag() {
		echo "<dl>\n";
	}
	
	/**
	 * コンテンツタグ
	 * @see AbstractClass::contentsTag()
	 */
	protected function contentsTag() {
		if (is_array($this->str)) {
			foreach ($this->str as $key => $value) {
				echo "<dt>".$key."</dt><dd>".$value."</dd>\n";
			}
		} else {
			echo "<dd>".$this->str."</dd>\n";
		}
	}
	
	/**
	 * エンドタグ
	 * @see AbstractClass::endTag()
	 */
	protected function endTag() {
		echo "</dl>\n";
	}
}