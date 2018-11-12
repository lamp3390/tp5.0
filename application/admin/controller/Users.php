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
        $search = input('param.search');
        $offset = input('param.offset');
        $limit = input('param.limit');

        if (!$ordername) {
            $ordername = 'id';
            $order = 'desc';
        }
        $where = [];
        if(!empty($search)){
            $where['name'] = ['like', '%' . $search . '%'];
        }
        $list = Db::table('user')->where($where)->limit($offset, $limit)->order($ordername.' '.$order)->select();
        $total = Db::table('user')->where($where)->count();
        return ['total'=>$total,'rows'=>$list];
    }
}