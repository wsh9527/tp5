<?php
namespace app\index\controller;

use app\index\model\Users;
use think\Controller;
use think\Request;
use think\Db;
use think\view;


class Index extends Controller
{
    function _initialize()
    {
        $this->request = Request::instance();
    }
    function test(){
        echo '接口返回';exit;
    }
    function index()
    {
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        $userInfo['uid']?$userInfo['uid']:'0';
        $res = array(
            'userInfo' => $userInfo
        );
        $this->assign($res);
        return $this->view->fetch();
    }
    function login()
    {
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        if($userInfo['uid'] > 0){
            $this->redirect(url('Index/index'));
        }else{
            $users = new Users();
            if($this->request->isPost()){
                $users->checklogin($this->request->post());
                exit;
            }
            $userInfo['uid']?$userInfo['uid']:'0';
            $res = array(
                'userInfo' => $userInfo
            );
            $this->assign($res);
            return $this->view->fetch();
        }

    }
    function lout()
    {
        $users = new Users();
        $res = $users->checklout();
        if($res['status'] == 1){
            $this->success('退出成功','Index/index');
        }else{
            $this->error('操作错误','Index/index');
        }
    }

}
