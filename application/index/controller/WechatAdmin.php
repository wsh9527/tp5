<?php
namespace app\index\controller;

use app\index\model\Users;
use app\index\model\Wechat;
use think\Controller;
use think\Request;
use think\Db;


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
            'userInfo' => $userInfo,
            'status' => 0
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
        // 获取表单上传文件 例如上传了001.jpg
        $file = request()->file('upload');

        $turepath = $file->getRealPath();
        $md5path=md5_file($turepath);
        $shalpath=sha1_file($turepath);
        $map["md5"]=$md5path;
        $map["sha1"]=$shalpath;
        //判断文件类型
        if(!count($file)){
            echo '图片不能为空!';
        }
        $type=$file->checkImg();
        if(!$type){
            echo '图片类型不正确!';
        }
        // 移动到框架应用根目录/public/uploads/ 目录下
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        $ss = $info->getFileInfo();
        var_dump($info);exit;
        if($info){

        }else{
            // 上传失败获取错误信息
            echo '上传失败';
        }
    }
}
