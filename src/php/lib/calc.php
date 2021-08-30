<?php

/**
 * calculate data
 */
class Calc {


    /**
     * calculation instance
     */
    static $instance = null;

    /**
     * calculate input data
     * you have to implement this method
     */
    function run($data1) {
        

      $current = new DateTime();
      $current_str1 = $current->format('Y年m月d日');
      $current_str2 = $current->format('h時i分s秒');

      

        $result = <<<EOS

<dl>
    <dt>Date1</dt>
    <dd>$current_str1</dd>
    <dd>$current_str2</dd>
    <dt>Input data</dt>
    <dd>$data1</dd>

</dl>
EOS;
        return $result;
    
    if(isset($_GET1['text_input'])) {  
        
    }

  }





    function run($data2) {
        
  
          $result = <<<EOS
  
  <dl>
      <dt>Date2</dt>
      <dt>Input data</dt>
      <dd>$data2</dd>
      <dt>Date</dt>
  </dl>
  EOS;
          return $result;
  if(isset($_GET2['text_input'])) {  


        
  }

}

function run($data3) {
        
  
  $result = <<<EOS

<dl>
<dt>Date3</dt>
<dt>Input data</dt>
<dd>$data3</dd>
<dt>Date</dt>
</dl>
EOS;
  return $result;
if(isset($_GET3['text_input'])) {  



}

}
function run($operation ) {
  $operation = $date3 

  if ($operation === "+") {
    $add = $date1 + $date2;
    echo ("足し算の結果: " . $add);
  } else if ($operation === "-") {
    $sub = $date1 - $date2;
    echo ("引き算の結果: " . $sub);
  } else if ($operation === "×") {
    $mul = $date1 * $date2;
    echo ("掛け算の結果: " . $mul);
  } else if ($operation === "÷") {
     $div = $date1 / $date2;
    echo ("割り算の結果: " . $div);
  }

}



Calc::$instance = new Calc;


// vi: se ts=4 sw=4 et:
?>