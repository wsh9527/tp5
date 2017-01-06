<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/10/9
 * Time: 10:14
 */
namespace app\index\model;

use think\Model;
use think\Controller;
use think\Db;
use think\Session;
use think\Request;
class Users extends Model
{
    use \traits\controller\Jump;
    //自定义初始化
    protected function initialize()
    {
        //需要调用`Model`的`initialize`方法
        $this->request = Request::instance();
        //TODO:自定义的初始化

    }
    function checklogin($post = ''){
        $condition = array(
            'username' => $post['username']
        );
        $usersInfo = $this->where($condition)->find();
        if(!$usersInfo){
            $this->error('账号密码错误');
        }
        if($usersInfo->data && (md5(trim($post['password'])) === $usersInfo->data['password'])){
            Session::set('uid',$usersInfo->data['id']);
            Session::set('gid',$usersInfo->data['gid']);
            Session::set('uname',$usersInfo->data['username']);
            $month=date('m',time());
            $request = Request::instance();
            $data = array(
                'lasttime'=>time(),
                'lastloginmonth'=>$month,
                'lastip'=>$request->ip()
            );
            $this->where(array('id' => $usersInfo->data['id']))->update($data);
            $this->success('登录成功','WechatAdmin/index');
        }else{
            $this->error('账号密码错误');
        }
    }
    function checklout(){
        $userInfo = $this->request->session();
        isset($userInfo['uid'])?$userInfo['uid']:$userInfo['uid']=0;
        if($userInfo['uid'] > 0){
            session_unset();
            session_destroy();
            $res = array(
                'status' => 1,
                'msg' => '退出成功'
            );
        }else{
            $res = array(
                'status' => 0,
                'msg' => '退出失败'
            );
        }
        return $res;
    }
    function insertModel($num=0){
        //$res1 = Db::query('select * from user where id = 6');
        $data = array(
            'username' => 'ceshi6',
            'auth_key' => '2YLLtgpv35HMF704woA2Q7kyO6LUxPvd',
            'password_hash' => '$2y$13$RARBDCqb6dPJVdLX6WS/aeYQo3rO1BUhsu/pMZQg7DLJvkAuMcX/q',
            'email' => '444897116@qq.com',
            'role' => '10',
            'status' => '10',
        );
        echo $num;
        $sss = Db::table('user')->insert($data);

        dump($sss);exit;
    }

    function updateModel(){
        $db = Db::table('user');
        $condition = array(
            'id' => 6
        );
        $data = array(
            'username' => 'thinkphp4',
            'email' => 'dddddddddddddddd.qq.com'
        );
        $res = $db->where($condition)->update($data);
        dump($res);
        exit;


    }
    function delModel(){
        $db = Db::table('user');
        //Db::table('think_user')->delete(1);
        $where = array(
            'id' => 13
        );
        $res = $db->where($where)->delete();
        dump($res);exit;
    }
}