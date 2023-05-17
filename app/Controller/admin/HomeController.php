<?php
/**
 * Created by : VsCode
 * User: Dumb Lake Monster (Wang Haiyang)
 * Date:  2023/4/16
 * Time:  15:02
 */

namespace app\Controller\admin;

use libs\core\CoreController;
use libs\core\Request;

class HomeController extends CoreController
{

    public function home()
    {
        $this->template->display('./app/View/admin/home/home.tpl');
    }
    public function main()
    {
        $this->template->fetch('./app/View/admin/home/main.tpl');
    }

}