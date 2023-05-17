
<!DOCTYPE html>
<html>
<head>
    <title>Map  Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- 引入 Bootstrap 样式 -->
    <link rel="stylesheet" href="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <!-- 引入 jQuery 库 -->
    <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- 引入 Bootstrap JavaScript 插件 -->
    <script src="https://cdn.bootcdn.net/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
    <!-- 引入腾讯地图 JavaScript 库 -->
    <script src="https://map.qq.com/api/gljs?v=1.exp&key=MZHBZ-PACLO-YXGWW-SE6KX-55EC7-WOFJN"></script>
    <script src="/public/ali/font_ffsizmupjbu/iconfont.js"></script>
    <link rel="stylesheet" href="/public/ali/font_ffsizmupjbu/iconfont.css">
    <link rel="stylesheet" href="/public/css/map.css">
    <link rel="stylesheet" href="/public/css/index.css">
    <script src="/public/js/map.js"></script>
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
{********导航*******}
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
{********地图*******}
<div class="container-fluid p-0 ">
    <div class="row no-gutters">
        <div class="col">
            <div id="container"></div>
        </div>
    </div>
</div>
{**********弹框*********}
{include file="../layout/moda_site.tpl"}
</body>
</html>
