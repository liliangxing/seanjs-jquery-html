<?php

namespace app\home\controller;

use think\Controller;
use think\Db;
use weixin\Wechat;

class Weixin extends Controller {
    private $token;
    private $data = array();
    /**
     * 应用程序初始化
     * @access public
     * @return void
     */
    static public function init()
    {
        // 定义当前请求的系统常量
        define('NOW_TIME',      $_SERVER['REQUEST_TIME']);
        define('REQUEST_METHOD',$_SERVER['REQUEST_METHOD']);
        define('IS_GET',        REQUEST_METHOD =='GET' ? true : false);
        define('IS_POST',       REQUEST_METHOD =='POST' ? true : false);
    }
    public function index()
    {
        Weixin::init();
        if (!class_exists('SimpleXMLElement')) {
            die('SimpleXMLElement class not exist');
        }
        if (!function_exists('dom_import_simplexml')) {
            die('dom_import_simplexml function not exist');
        }
        $this->token = $_GET['token'];
        if (!preg_match('/^[0-9a-zA-Z]{3,42}$/', $this->token)) {
            die('error token');
        }
        $weixin = new Wechat($this->token);
        $this->data = $weixin->request();
        if ($this->data) {
            $weixin->response('阿弥陀佛', 'text');
            return;
        }
    }


}
