<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/10/29
 * Time: 10:17
 */
namespace app\admin\controller;

use think\Controller;
use think\Db;

class Index extends Controller{

    public function index(){
       return $this->fetch();
    }

    public function xiaolong(){
        echo "123";
    }




}