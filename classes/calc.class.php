<?php

class Calc {

    public $operator;
    public $num1;
    public $num2;

    public function __construct (string $operator, int $num1, int $num2) {

        $this->operator = $operator;
        $this->num1 = $num1;
        $this->num2 = $num2;
        
    }

    public function calculator() {

        switch ($this->operator) {
            case '+':
                $result = $this->num1 + $this->num2;
                return $result;
                break;
            
            case '-':
                $result = $this->num1 - $this->num2;
                return $result;
                break;
            
            case '/':
                if($this->num2 !== 0) { 
                    $result = $this->num1 / $this->num2;
                    return $result;
                    break;
                } else {
                    echo "<h4>Cannot divede by zero</h4>";
                    exit;
                }

            case '*':
                $result = $this->num1 * $this->num2;
                return $result;
                break;
            
            case '%':
                $result = $this->num1 % $this->num2;
                return $result;
                break;
            
            case 'pow':
                $result = pow($this->num1, $this->num2);
                return $result;
                break;
            
            default:
                echo "Error found";
                break;
        }
    }
}

?>