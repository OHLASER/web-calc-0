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
        $result = <<<EOS
<dl>
    <dt>Input data</dt>
    <dd>$data</dd>
</dl>
EOS;
        return $result;
    }
}


Calc::$instance = new Calc;


// vi: se ts=4 sw=4 et:
