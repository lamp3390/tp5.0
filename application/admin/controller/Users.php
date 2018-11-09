<?php
namespace app\admin\controller;

use think\Controller;
use think\Db;

class Users extends Controller {
    public function index(){
        return $this->fetch();
    }

    public function lists(){
        $ordername = input('param.ordername');
        $order = input('param.order');
        $list = Db::table('user')->limit(1000)->select();
        $total = count($list);
        return ['total'=>$total,'rows'=>$list];
    }
}