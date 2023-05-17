<?php
/* Smarty version 4.3.0, created on 2023-05-17 16:00:37
  from 'E:\MINE\site\app\View\web\layout\moda_site.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_646489a548b1c5_47897670',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dab4bdb0cc21a36dcfdcef476b304e69740cadcb' => 
    array (
      0 => 'E:\\MINE\\site\\app\\View\\web\\layout\\moda_site.tpl',
      1 => 1684310435,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_646489a548b1c5_47897670 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="site_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class=""><span class="icon iconfont icon-dizhixinxiguanli"></span>&nbsp;&nbsp;&nbsp;地址信息：</h5>
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">×
                </button>
            </div>
            <div class="modal-body">
                    <p><span class="icon iconfont icon-name"></span>&nbsp;<text class="site_title"></text> </p>
                    <p><span class="icon iconfont icon-weizhi"></span>&nbsp;<text class="site_info"></text> </p>
                    <p><span class="icon iconfont icon-jiagechaxun"></span>&nbsp;<text class="site_price"></text> </p>
                    <hr>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary btn-sm">导航</button>
                <button type="button" class="btn btn-success btn-sm">报名</button>
                <button type="button" class="btn btn-danger btn-sm">价格</button>
                <button type="button" class="btn btn-warning btn-sm">详情</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<style>
    .modal-content
    {
        top:300px;
    }
</style><?php }
}
