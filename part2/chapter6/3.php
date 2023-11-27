<?php
class AgentSmith {}

$objFirst = new AgentSmith();
$objFirst->mind = 0.123;

$objSecond = $objFirst;
$objSecond->mind = 100;

echo "First mind: {$objFirst->mind}, second mind: {$objSecond->mind}";
// echo $objFirst;