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
use think\db\Query;
class Wechat extends Model
{
    use \traits\controller\Jump;
    //自定义初始化
    protected function initialize()
    {


    }
    //功能列表
    function featuresList(){

    }
}