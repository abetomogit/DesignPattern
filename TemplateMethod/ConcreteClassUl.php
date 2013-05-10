<?php
class ConcreteClassUl extends AbstractClass {
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
		echo "<ul>\n";
	}
	
	/**
	 * コンテンツタグ
	 * @see AbstractClass::contentsTag()
	 */
	protected function contentsTag() {
		if (is_array($this->str)) {
			foreach ($this->str as $value) {
				echo "<li>".$value."</li>\n";
			}
		} else {
			echo "<li>".$this->str."</li>\n";
		}
	}
	
	/**
	 * エンドタグ
	 * @see AbstractClass::endTag()
	 */
	protected function endTag() {
		echo "</ul>\n";
	}
}