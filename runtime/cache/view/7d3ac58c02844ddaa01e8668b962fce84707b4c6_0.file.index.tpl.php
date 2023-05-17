<?php
/* Smarty version 4.3.0, created on 2023-05-17 16:43:34
  from 'E:\MINE\site\app\View\web\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646493b6587d22_56831958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3ac58c02844ddaa01e8668b962fce84707b4c6' => 
    array (
      0 => 'E:\\MINE\\site\\app\\View\\web\\index\\index.tpl',
      1 => 1684313009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/moda_site.tpl' => 1,
  ),
),false)) {
function content_646493b6587d22_56831958 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <title>Map  Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap 样式 -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- 引入 jQuery 库 -->
    <?php echo '<script'; ?>
 src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- 引入 Bootstrap JavaScript 插件 -->
    <?php echo '<script'; ?>
 src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- 引入腾讯地图 JavaScript 库 -->
    <?php echo '<script'; ?>
 src="https://map.qq.com/api/gljs?v=1.exp&key=MZHBZ-PACLO-YXGWW-SE6KX-55EC7-WOFJN"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/public/ali/font_ffsizmupjbu/iconfont.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="/public/ali/font_ffsizmupjbu/iconfont.css">
    <link rel="stylesheet" href="/public/css/map.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <?php echo '<script'; ?>
 src="/public/js/map.js"><?php echo '</script'; ?>
>
    <!-- 自定义 CSS 样式 -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #container {
            height: calc(100vh - 56px);
        }
    </style>
</head>
<body onload="initMap()">
    <div class=" text-center">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <h5><span class="badge badge-secondary">米粒儿大的烦恼</span></h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">选项1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">选项2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">选项3</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" action="#">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
<div class="container-fluid p-0 ">
    <div class="row no-gutters">
        <div class="col">
            <div id="container"></div>
        </div>
    </div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:../layout/moda_site.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</body>
</html>
<?php }
}
