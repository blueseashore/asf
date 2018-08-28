<?php

/**
 * User: kendo    Date: 2018/8/28
 */
class DemoModel
{
    public function getData()
    {
        return [
            'title' => 'Test',
            'content' => 'Now time is ' . date("Y-m-d H:i:s", time())
        ];
    }
}