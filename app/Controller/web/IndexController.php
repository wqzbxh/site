<?php
/**
 * Created by : VsCode
 * User: Dumb Lake Monster (Wang Haiyang)
 * Date:  2023/3/4
 * Time:  23:54
 */

namespace app\Controller\web;

use libs\core\CoreController;
use libs\db\Db;

class IndexController extends CoreController
{

    public function index(){
        $this->template->display('./app/View/web/index/index.tpl');
    }

    public function index2()
    {
        $db = Db::connect_database()->db;
        $_GET['id'] = ' 1 OR 1=1';
        $where[] = ['id','=',$_GET['id']] ;
        $data = [
            'typName' => 'test',
            "description" => 'testdescription'
        ];
        $result = Db::connect_database()->table('user')->where('id','=', $_GET['id'])->select();
//        $result = Db::connect_database()->table('unittyp')->insert($data);
//        $result = Db::connect_database()->table('user')->alias('nb')->where($where)->get();
//        $result = Db::connect_database()->table('userpermiasionselection')
//            ->leftjoin('user','user.userId = userpermiasionselection.user_id')
//            ->leftjoin('permission','permission.id = userpermiasionselection.permission_id')
//            ->select();
//        $stm = $db->query('select * from user');
//        $result = $stm->fetchAll();
        var_dump($result);
    }
    public function aaa()
    {
        echo '这里是aaaa控制器,测试切片模式';
    }
}