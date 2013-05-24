<?php
class ConcreteObserver1 implements Observer {
	public function update(Subject $subject) {
		echo "Observer1:".$subject->getNumber();
	}
}
?>