<?php
echo "<br/><b>4-13</b><br/>";

//　if課題１
class PriceOfFood{
  private string $food;
  private int $num1;

  public function __construct(string $food){
    $this->food = $food;
    $this->num1 = 0;
  }

  public function calculation(){
    if($this->food % 2 == 0){
      $this->num1 = $this->food / 2;
    }
    else{
      $this->num1 = ($this->food - 1) / 2;

      if($this->num1 > 2){
        $this->num1 += 5;
      }
      else{
        $this->num1 += 6;
      }
    }
    echo "課題１ : " . $this->num1 . "<br/>";
  }
}

$calculate = new PriceOfFood(7);
$calculate->calculation();

//　if課題２
class DescribeNumber{
  private int $num2;

  public function __construct(int $num2){
    $this->num2 = $num2;
  }

  public function descriptionOfNumber(){
    if ($this->num2 % 12 == 0 && $this->num2 % 24 == 0){
      echo "課題２：numの値は12の倍数かつ、24の倍数です<br/>";
    }
    elseif ($this->num2 % 12 == 0) {
      echo "課題２：numの値は12の倍数です<br/>";
    } 
    elseif ($this->num2 % 24 == 0) {
      echo "課題２：numの値は24の倍数です<br/>";
    }
  }
}
$discribe = new DescribeNumber(72);
$discribe->descriptionOfNumber();

//for課題１
echo "課題３：";

class ForLoop1{
  private int $total1;

  public function __construct(int $total1){
    $this->total1 = 0;
  }

  public function DisplayResult(){
    for($i=0; $i<5; $i++){
      $this->total1 += $i;
      var_dump($this->total1);
    }
  }
}
$resultOfLoop = new ForLoop1(0);
$resultOfLoop->displayResult();

//for課題２
echo '<br/>課題４：';
class ForLoop2{
  private int $total2;

  public function __construct(int $total2){
    $this->total2 = 0;
  }

  public function displayResult2(){
    for($i=0; $i<21; $i++){
      $this->total2 += 5;
    }

    var_dump($this->total2);
  }
}
$resultOfLoop2 = new ForLoop2(0);
$resultOfLoop2->displayResult2();

//for+if課題 3
echo "<br/>";
echo "課題５：";

class ForPlusIf{
  private int $start;
  private int $stop;

  public function __construct(int $start, int $end){
    $this->start = $start;
    $this->end = $end;
  }

  public function displayResult3(){
    for ($i = $this->start; $i < $this->end; $i++){
      if($i % 2 == 0 && $i % 3 == 0){
        echo $i . "は2の倍数かつ3の倍数です</br>　　　　";
      }
      elseif ($i % 3 == 0) {
        echo $i . "は3の倍数です</br>　　　　";
      } 
      elseif ($i % 2 == 0) {
        echo $i . "は2の倍数です</br>　　　　";
      }
    }
  }
}
$result = new ForPlusIf(1,10);
$result->displayResult3();



