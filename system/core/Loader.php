<?php

/**
 * User: kendo    Date: 2018/8/28
 */
class Asf_Loader
{
    public static function baseLoad()
    {
        require_once 'Controller.php';
        require_once 'Model.php';
    }

    public static function autoload(string $class)
    {
        $class = strtolower($class);
        $path = '';
        if (strpos($class, 'controller')) {    //控制器
            $path = CONTROLLER_PATH . ucfirst(str_replace('controller', '', $class)) . '.php';
        } elseif (strpos($class, 'model')) {    //模型
            $path = MODEL_PATH . ucfirst(str_replace('model', '', $class)) . '.php';
        }
        if ($path && file_exists($path)) {
            require_once $path;
        } else {
            exit($class . ':无法加载');
        }
    }
}

/**
 * 设置include基础路径
 * PATH_SEPARATOR，路径分隔符
 *      在unix/linux系统下是:
 *      在windows系统下是;
 */
$include = [CONTROLLER_PATH, MODEL_PATH, VIEW_PATH];
set_include_path(get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $include));
spl_autoload_register('Asf_Loader::autoload');
