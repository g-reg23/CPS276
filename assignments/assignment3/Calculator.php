<?php
class Calculator {
  function calc($operator, $num1, $num2) {
    switch ($operator) {
        case '/':
            return $this->divide($num1, $num2);
            break;
        case '*':
            return $this->multiply($num1, $num2);
            break;
        case '-':
            return $this->subtract($num1, $num2);
            break;
        case '+': 
            return $this->add($num1, $num2);
            break;
        default: 
            echo "<p>Improper operator</p>";
    }
  }
  function add($num1, $num2) {
    $result = $num1 + $num2;
    echo "<p>The sum of the two numbers is {$result}</p>";
  }
  function subtract($num1, $num2) {
    $result = $num1 - $num2;
    echo "<p>The difference of the two numbers is {$result}</p>";
  }
  function multiply($num1, $num2) {
    $result = $num1 * $num2;
    echo "<p>The product of the two numbers is {$result}</p>";
  }
  function divide($num1, $num2) {
    if ($num2 == 0) {
        echo "<p>Cannot divide by 0</p>";
    }else{
        $result = $num1 / $num2;
        echo "<p>The division of the two numbers is {$result}</p>";
    }
  }
}
?>