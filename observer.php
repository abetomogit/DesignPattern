<?php
include './Observer/SubjectClass.php';
include './Observer/ObserverClass.php';
include './Observer/ConcreteSubject1.php';
include './Observer/ConcreteObserver1.php';
include './Observer/ConcreteObserver2.php';

$subject  = new ConcreteSubject1();
$observer1 = new ConcreteObserver1();
$observer2 = new ConcreteObserver2();

$subject->addObserver($observer1);
$subject->addObserver($observer2);

$subject->execute();
?>