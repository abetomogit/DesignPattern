<?php
abstract class Subject {
	private $observers = array();
	public function addObserver(Observer $observer) {
		array_push($this->observers, $observer);
	}
	public function deleteObserver() {
		array_pop($this->observers);
	}
	public function notifyObservers() {
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}
	public abstract function getNumber();
	public abstract function execute();
}
?>