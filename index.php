<?php

// Loads all classes in root
require_once 'autoLoad.php';

$calculator = new Calculator();
$calculator->executeCommand(new AddCommand(10));
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->executeCommand(new AddCommand(10));
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->undo();
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->executeCommand(new SubtractCommand(5));
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->executeCommand(new MultiplyCommand(5));
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->executeCommand(new DivideCommand(5));
echo '<h1>' . $calculator->getValue() . '<h1>';
$calculator->executeCommand(new AddThenMultiplyCommand(5, 10));
echo '<h1>' . $calculator->getValue() . '<h1>';
