<?php
class ConcreteObserver2 implements Observer {
	public function update(Subject $subject) {
		echo "<br>Observer2:";
		for ($i = 0; $i < $subject->getNumber(); $i++) {
			echo "*";
		}
	}
}
?>