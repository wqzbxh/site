<?php

/**
 * Created by : PhpStorm
 * User: 哑巴湖大水怪（王海洋）
 * Date: 2023/4/2
 * Time: 1:34
 */

use libs\core\Router;

Router::add('login','admin/login/login');
Router::add('logout','admin/login/logout');

Router::add('create_timesheet','admin/login/reateTimesheet');

Router::add('home','admin/home/home');
Router::add('main','admin/home/main');
