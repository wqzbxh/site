<?php
/**
 * Created by : VsCode
 * User: Dumb Lake Monster (Wang Haiyang)
 * Date:  2023/3/4
 * Time:  23:08
 */

namespace app\Controller\api;

use app\Controller\common\ChatGpt;
use app\Controller\common\Ldap;
use app\Controller\common\RedisCache;
use app\Model\UserModel;
use libs\core\Cache\Cache;
use libs\core\CoreController;
use libs\core\Request;

class IndexController extends CoreController
{
    public function index(Request $request)
    {
        $chatGpt = new ChatGpt();
        $message['content'] = $request->get('message');
        $message['role'] = $request->get('user');
//        var_dump();
        $chatGpt->sendImg($message);

    }
}