<?php
namespace app\index\controller;

class Indexindex
{
    public function index()
    {
        /*$request = Request::instance();
        $res = $request->has('id','post');
        $res1 = $request->param('id');
        dump($res); dump($res1);exit;
        $user = new User;*/
        //$list = $user->insertModel('sss2');
        //var_dump($list);

        /*        $db1 = Db::connect('db1');
                //$res1 = $db1->query('select * from wx_users where id = 1');
                $res1 = $db1->table('wx_users')->where($where)->find();
                $db2 = Db::connect('db2');
                $res2 = $db2->query('select * from tp_user where id = 6');*/

        /*        var_dump($res1);
                var_dump($res2);*/
        //$user->insertModel(3);    //新增
        //$user->updateModel();     //更新
        //$user->delModel();      //删除
        //exit;
        //echo 'index2';
        //$this->success('测试成功', 'Index/index2');
        //$this->redirect('Index/index2', ['cate_id' => 's2']);
        //$request = Request::instance();
        //echo '路由信息：';
        //dump($request->isPjax());
        //echo '调度信息：';
        //dump($request->dispatch());
        //exit;
        $array1 = array(
            'a1' => 'a1',
            'a2' => 'a2'

        );
        $oldArr = array(
            '3','16','1','6','9','4'
        );
        dump($oldArr);
        $length = count($oldArr);
        /*
        //冒泡 小->大
        for($i = 0;$i < $length-1;$i++){
            for($j = $length-1;$j > $i;$j--){
                if($oldArr[$j] < $oldArr[$j-1]){
                    $a = $oldArr[$j];
                    $oldArr[$j] = $oldArr[$j-1];
                    $oldArr[$j-1] = $a;
                }
            }
        }*/

        //小->大
        /*for($i=0;$i<$length-1;$i++){
            for($j = $length-1;$j > $i;$j--){
                if($oldArr[$j] > $oldArr[$j-1]){
                    $tmp = $oldArr[$j];
                    $oldArr[$j] = $oldArr[$j-1];
                    $oldArr[$j-1] = $tmp;
                }
            }
        }*/


        /*for($i = 0;$i < $length - 1;$i++){
            for($j = 0;$j < $length - 1 - $i;$j++){
                if($oldArr[$j] > $oldArr[$j+1]){
                    $tmp = $oldArr[$j+1];
                    $oldArr[$j+1] = $oldArr[$j];
                    $oldArr[$j] = $tmp;
                }
            }
        }*/

        //大->小
        /*for($i = 0;$i < $length-1;$i++){
            for($j = 0;$j < $length-1-$i;$j++){
                if($oldArr[$j] < $oldArr[$j+1]){
                    $a = $oldArr[$j];
                    $oldArr[$j] = $oldArr[$j+1];
                    $oldArr[$j+1] = $a;
                }
            }
        }*/
        //插入
        /*for ($i = 0;$i < $length - 1;$i ++){
            $tmp = $oldArr[$i];
            for ($j = $length - 1;$j > 0;$j--){
                if($tmp < $oldArr[$j]){
                    $oldArr[$j] = $tmp;
                    $oldArr[$j-1] = $oldArr[$j];
                }
            }
        }*/



        dump($oldArr);
        exit;
        $data = array(
            'name'=>'thinkphp',
            'data' => $array1
        );
        $this->assign('data',$data);
        return $this->fetch('index1');

    }
    public function index2()
    {
        $request = Request::instance();

        dump(input('server.'));
        //$this->error('测试失败', 'Index/index');
        //dump(I('get cate_id'));
        exit;
        /*return '<style type="text/css">*{ padding: 0; margin: 0; } .think_default_text{ padding: 4px 48px;} a{color:#2E5CD5;cursor: pointer;text-decoration: none} a:hover{text-decoration:underline; } body{ background: #fff; font-family: "Century Gothic","Microsoft yahei"; color: #333;font-size:18px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.6em; font-size: 42px }</style><div style="padding: 24px 48px;"> <h1>:)</h1><p> ThinkPHP V5<br/><span style="font-size:30px">十年磨一剑 - 为API开发设计的高性能框架</span></p><span style="font-size:22px;">[ V5.0 版本由 <a href="http://www.qiniu.com" target="qiniu">七牛云</a> 独家赞助发布 ]</span></div><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_bd568ce7058a1091"></thinkad>';*/

    }
}
