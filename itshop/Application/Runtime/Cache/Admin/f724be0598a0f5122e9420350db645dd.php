<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>无标题文档</title>
    <link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
    <script language="JavaScript" src="/Public/Admin/js/jquery.js"></script>
</head>

<body>
    <div class="place">
        <span>位置：</span>
        <ul class="placeul">
            <li><a href="#">首页</a></li>
            <li><a href="#">表单</a></li>
        </ul>
    </div>
    <div class="formbody">
        <div class="formtitle"><span>基本信息</span></div>
        <form action="" method="post">
            <ul class="forminfo">
                <li>
                    <label>权限名称</label>
                    <input name="auth_name" placeholder="请输入权限名称" type="text" class="dfinput" /></li>
                <li>
                    <label>父级权限</label>
                    <select name="auth_pid" class="dfinput">
                        <option value="0">作为顶级</option>
                        <?php if(is_array($authInfo)): foreach($authInfo as $key=>$v): ?><option value="<?php echo ($v["auth_id"]); ?>"><?php echo ($v["auth_name"]); ?></option><?php endforeach; endif; ?>
                    </select>
                    <i></i></li>
                <li>
                    <label>控制器名</label>
                    <input name="auth_c" placeholder="请输入控制器名称" type="text" class="dfinput" />
                </li>
                <li>
                    <label>方法名称</label>
                    <input name="auth_a" placeholder="请输入方法名称" type="text" class="dfinput" />
                </li>
                <li>
                	<label>是否显示</label>
                	<cite>
                		<input name="auth_is_show" type="radio" value="1" checked="checked" />显示
                		&nbsp;&nbsp;&nbsp;&nbsp;
                		<input name="auth_is_show" type="radio" value="0" />不显示</cite>
                </li>
                <li>
                    <label>&nbsp;</label>
                    <input name="" id="btnSubmit" type="button" class="btn" value="确认保存" />
                </li>
            </ul>
        </form>
    </div>
</body>
<script type="text/javascript">
//jQuery代码
$(function(){
    //给btnsubmit绑定点击事件
    $('#btnSubmit').on('click',function(){
        //表单提交
        $('form').submit();
    })
});
</script>
</html>