<?php
class ConcreteSubject1 extends Subject {
	private $randomNum;
	public function getNumber() {
		return $this->randomNum;
	}
	public function execute() {
		$this->randomNum = rand(1, 50);
		parent::notifyObservers();
	}
}
?>