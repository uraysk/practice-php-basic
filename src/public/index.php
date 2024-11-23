<?php

echo "<br/>";
echo "<b>4-14</b><br/>";



//guard課題１
echo "課題１：";
class HogeOrFuga{
  private string $word;

  public function _construct(string $word){
    $this->word = $word;
  }

  public function whenWordIsFuga(){
    for ($i = 1; $i <= 6; $i++) {
      if ($this->word == "hoge" && $i % 2 == 0) {
          echo "wordがhoge かつ " . $i . "は2の倍数です<br/>　　　　";
          break;
      }
  
      if($this->word == "hoge" && $i % 2 == 1){
          echo "wordがhoge かつ " . $i . "は2の倍数以外です<br/>　　　　";
          break;
      }
  
      if ($i % 2 == 0) {
          echo "wordがhogeでない かつ " . $i . "は2の倍数です<br/>　　　　";
          continue;
      }
  
      if($i % 2 == 1){
          echo "wordがhogeでない かつ " . $i . "は2の倍数以外です<br/>　　　　";
          continue;
      }
    }
  }
}
$result = new HogeOrFuga("fuga");
$result->whenWordIsFuga();



//buildin課題１
echo "<br/>";
echo "課題２：";
class MaxNumber1{
  private array $arrayList;

  public function __construct(array $arrayList){
    $this->arrayList = $arrayList;
  }

  public function showMaxNumbers(){
    foreach ($this->arrayList as $array) {
      //Use max for extracting max number from arraylist
        echo max($array)."<br/>　　　　";
    }
  }
}

$arrayList = [
	[3, 5, 1, 0, 9, 12],
	[1, 2, 14, 10, 19, 1],
	[0, 3, 3, 3, 7, 2]
];

$maxNumbers = new MaxNumber1($arrayList);
$maxNumbers->showMaxNumbers();



//buildin課題２
echo "<br/>";
echo "課題３：";

class MaxNumDivisibleByThree{
  private array $arrayList;
  
  public function __construct(array $arrayList){
    $this->arrayList = $arrayList;
  }

  public function showMaxNum(){
    foreach ($this->arrayList as $array) {
      //Use array_filter for specifying number from arraylist which is divisible by three
        $divisibleByThree = array_filter($array, function($element) {
            return $element % 3 == 0;
        });
        //If divisibleByThree is not empty, echo max number is divisible by three
        if (!empty($divisibleByThree)) {
            echo max($divisibleByThree) . "<br/>　　　　";
        }
    }
  }
}

$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 9, 1],
    [0, 3, 4, 10, 20, 2]
];

$maxNumberDivByThree = new MaxNumDivisibleByThree($arrayList);
$maxNumberDivByThree->showMaxNum();



//foreach+if 課題１
echo "<br/>課題４：";

class ResultListOfExam{
  private array $examScoreList;
  private array $resultList;

  public function __construct(array $examScoreList, array $resultList){
    $this->examScoreList = $examScoreList;
    $this->resultList = $resultList;
  }

  public function resultOfExam(){
    foreach ($this->examScoreList as $subject => $score) {
      if ($score >= 30){
          //scoreが３０以上の時はresultListに教科が合格であるという文章を代入する
          $this->resultList[] = $subject . "は合格";
      }
      else{
          //scoreが３０未満の時はresultListに教科が不合格であるという文章を代入する
          $this->resultList[] = $subject . "は不合格";
      }
    }
    echo implode("<br/>　　　　", $this->resultList);  
    echo "<br/>";
  }
  
}

$examScoreList = [
  "国語"=>70, "算数"=>31, "理科"=>45, "社会"=>29, "英語"=>30
];
$resultList = [];

$result = new ResultListOfExam($examScoreList,$resultList);
$result->resultOfExam();



//foreach+if 課題２
echo "<br/>";
echo "課題5：";

class ResultListOfExam2{
  private array $examScoreLists;
  private array $examScoreList;
  private array $borderScore;
  private array $resultList;

  public function __construct(array $examScoreLists, array $examScoreList, array $borderScore, array $resultList){
    $this->examScoreLists = $examScoreLists;
    $this->examScoreList = $examScoreList;
    $this->borderScore = $borderScore;
    $this->resultList = $resultList;
  }

  public function resultsOfExam(){
    foreach ($this->examScoreLists as $examineeNum => $this->examScoreList) {
     //Initialised the value as pass the exam
      $passed = true;
  
      //Sort the result if it didn't reach the border.
      foreach ($this->examScoreList as $subject => $score){
        if ($score < $this->borderScore[$subject]){
        //examinee couldn't pass the exam
        $passed = false;
        break;
      }
    }
  
    //if passed (=true)...
    if ($passed){
      $this->resultList[] = ($examineeNum + 1) . "番目の受験者は合格";
    }
    else{
      $this->resultList[] = ($examineeNum + 1) . "番目の受験者は不合格";
    }
  }
  echo implode("<br/>　　　　", $this->resultList);
  }
  
}

$examScoreLists = [
  ["japanese" => 30, "math" => 30, "english" => 30],
  ["japanese" => 35, "math" => 41, "english" => 90],
  ["japanese" => 89, "math" => 40, "english" => 60],
  ["japanese" => 70, "math" => 70, "english" => 30]
];
//ボーダーラインの点数
$borderScore = ["japanese" => 30, "math" => 40, "english" => 31];
$resultList = [];

$result2 = new ResultListOfExam2($examScoreLists,$examScoreList,$borderScore,$resultList);
$result2->resultsOfExam();




