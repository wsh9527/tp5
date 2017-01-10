<?php
namespace app\index\controller;

use app\index\model\Users;
use app\index\model\Wechat;
use think\Controller;
use think\Request;
use think\Db;
use think\view;


class WechatAdmin extends Controller
{
    function _initialize()
    {
        $this->request = Request::instance();
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        if(!$userInfo['uid']){
            $this->redirect(url('Index/login'));
        }
    }
    function index()
    {
        //echo 3;exit;
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        $userInfo['uid']?$userInfo['uid']:'0';
        $res = array(
            'userInfo' => $userInfo
        );
        $this->assign($res);
        return $this->view->fetch();
    }
    function features(){
        $wechat = new Wechat();
        $wechat->featuresList();
        return $this->view->fetch();
    }

    //接入
    function wxaccess(){
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        $userInfo['uid']?$userInfo['uid']:'0';
        $res = array(
            'userInfo' => $userInfo,
            'status' => 1
        );
        $this->assign($res);
        return $this->view->fetch();
    }
    //editForms
    function editForms(){
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        $userInfo['uid']?$userInfo['uid']:'0';
        $res = array(
            'userInfo' => $userInfo,
            'status' => 1
        );
        $this->assign($res);
        return $this->view->fetch();
    }
    function uploadFile(){
        echo 3;exit;
    }
}
