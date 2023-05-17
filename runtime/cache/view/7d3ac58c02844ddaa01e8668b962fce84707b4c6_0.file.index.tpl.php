<?php
/* Smarty version 4.3.0, created on 2023-05-17 17:40:46
  from 'E:\MINE\site\app\View\web\index\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_6464a11e49dee2_23175562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d3ac58c02844ddaa01e8668b962fce84707b4c6' => 
    array (
      0 => 'E:\\MINE\\site\\app\\View\\web\\index\\index.tpl',
      1 => 1684316444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/moda_site.tpl' => 1,
  ),
),false)) {
function content_6464a11e49dee2_23175562 (Smarty_Internal_Template $_smarty_tpl) {
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
        <nav class="navbar navbar-expand-lg navbar-light bg-light ">
            <h5><span class="badge badge-secondary  align-middle mt-1">米粒儿大的忧愁</span></h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <div class="spinner-grow  text-light" role="status">
                    <span class="navbar-toggler-icon"></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item hover-button px-5 d-flex flex-row">
                            <a class="nav-link" target="_blank" href="https://wp.wqzbxh.site/">哑巴湖大水怪笔记？</a>
                    </li>
                    <li class="nav-item  hover-button px-5 d-flex flex-row">
                        <a class="nav-link" href="http://2023.wqzbxh.site/">去看烟花？</a>
                    </li>
                    <li class="nav-item hover-button px-5 d-flex flex-row">
                        <a class="nav-link " href="https://gyouth.cn/">我是驾校</a>
                    </li>
                </ul>
                <form class="form-inline my-2   my-lg-0" action="#">
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
