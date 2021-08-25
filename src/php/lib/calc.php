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
    function run($data) {
        



    
      $current = new DateTime();
      $current_str1 = $current->format('Y年m月d日');
      $current_str2 = $current->format('h時i分s秒');

      

        $result = <<<EOS

<dl>
    <dt>Date</dt>
    <dd>$current_str1</dd>
    <dd>$current_str2</dd>
    <dt>Input data</dt>
    <dd>$data</dd>
</dl>
EOS;
        return $result;
    }
    if(isset($_GET['text_input'])) {  
        //$_GET['text_input']がすでに定義されている（値が送信されている）場合
        $result = h($_GET['Date']); 
        $text_input = h($_GET['text_input']);
      }else{
        //値がまだ送信されていない（定義されていない）場合
        $text_input = "a";
      }
}


Calc::$instance = new Calc;


// vi: se ts=4 sw=4 et:
