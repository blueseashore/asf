<?php

/**
 * User: kendo    Date: 2018/8/28
 */
class DemoController
{
    public function index()
    {
        $data = (new DemoModel())->getData();
        require VIEW_PATH . 'demo/index.php';
    }

    public function hello()
    {
        echo "douniwan \n";
    }
}