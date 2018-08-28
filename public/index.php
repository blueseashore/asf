<?php
/**
 * 一个简单的框架
 * User: kendo    Date: 2018/8/28
 */

//应用目录位置
define('APP_PATH', '../application/');

//模型目录位置
define('MODEL_PATH', '../application/models/');

//控制器目录位置
define('CONTROLLER_PATH', '../application/controllers/');

//视图目录位置
define('VIEW_PATH', '../application/views/');

//系统目录位置
define('SYSTEM_PATH', '../system/');

require_once SYSTEM_PATH . 'core/Asf.php';

$c = $_GET['c'] ?? 'Demo';
$a = $_GET['a'] ?? 'index';
$c .= 'Controller';
$controller = new $c();
if (method_exists($controller, $a)) {
    $controller->$a();
} else {
    exit($c . '-' . $a . ':方法不存在');
}