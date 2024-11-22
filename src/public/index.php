<?php

echo "<br/><b>4-12</b>";
echo "<br/>課題１：";

$examScoreList = [
  "国語"=>70, "算数"=>31, "理科"=>45, "社会"=>29, "英語"=>30
];
$resultList = [];

  foreach ($examScoreList as $subject => $score) {
      if ($score >= 30){
          //scoreが３０以上の時はresultListに教科が合格であるという文章を代入する
          $resultList[] = $subject . "は合格";
      }
      else{
          //scoreが３０未満の時はresultListに教科が不合格であるという文章を代入する
          $resultList[] = $subject . "は不合格";
      }
  }
  //resultListの情報を改行で区切って出力する
  echo implode("<br/>　　　　", $resultList);  
  echo "<br/>";

  
echo "<br/>";
echo "課題2：";

$examScoreLists = [
  ["japanese" => 30, "math" => 30, "english" => 30],
  ["japanese" => 35, "math" => 41, "english" => 90],
  ["japanese" => 89, "math" => 40, "english" => 60],
  ["japanese" => 70, "math" => 70, "english" => 30]
];

//ボーダーラインの点数
$borderScore = ["japanese" => 30, "math" => 40, "english" => 31];

$resultList = [];

//Extract Examinee No. and the Score List
foreach ($examScoreLists as $examineeNum => $examScoreList) {
//Initialised the value as pass the exam
  $passed = true;

  //Sort the result if it didn't reach the border.
  foreach ($examScoreList as $subject => $score){
    if ($score < $borderScore[$subject]){
      //examinee couldn't pass the exam
      $passed = false;
      break;
    }
  }

  //if passed (=true)...
  if ($passed){
    $resultList[] = ($examineeNum + 1) . "番目の受験者は合格";
  }
  else{
    $resultList[] = ($examineeNum + 1) . "番目の受験者は不合格";
  }
}
echo implode("<br/>　　　　", $resultList);