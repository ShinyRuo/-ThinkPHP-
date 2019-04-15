<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN""http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>dnf拍卖行后台登录</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/css/style.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="__PUBLIC__/Admin/css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="__PUBLIC__/Admin/scripts/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="__PUBLIC__/Admin/scripts/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="__PUBLIC__/Admin/scripts/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="__PUBLIC__/Admin/scripts/jquery.wysiwyg.js"></script>
</head>
<body id="login">
<?php echo ($error); ?>
<div id="login-wrapper" class="png_bg">
  <div id="login-top">
    <h1>Simpla Admin</h1>
    <!-- Logo (221px width) -->
    <a href="http://www.865171.cn"><img id="logo" src="__PUBLIC__/Admin/images/logo.png" alt="Simpla Admin logo" /></a> </div>
  <!-- End #logn-top -->
  <div id="login-content">
    <form action="__URL__/checkLogin" method="post">
      <div class="notification information png_bg">
        <div>
       <?php switch($_GET['logerror']): case "1": ?>用户名不能为空！<?php break;?>
    		<?php case "2": ?>输入的用户名没权限！<?php break;?>
    		<?php case "3": ?>输入的密码有误！<?php break;?>
    		<?php case "4": ?>输入的验证码有误！<?php break;?>
    		<?php default: ?>请您登录！<?php endswitch;?>
        </div>
      </div>
      <p>
        <label>用户名</label>
        <input class="text-input" type="text" name="username"/>
      </p>
      <div class="clear"></div>
      <p>
        <label>密码</label>
        <input class="text-input" type="password" name="password"/>
        </p>
        <div class="clear"></div>
      <p>
      <label>验证码</label>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <img src="__URL__/verify"/ onclick="this.src='__URL__/verify/'+Math.random()">
        <input class="text-input" type="text" style="width:120px" name="verify"/>
      </p>
      <div class="clear"></div>
      <p id="remember-password">
        <input type="checkbox" />
        记住密码 </p>
      <div class="clear"></div>
      <p>
        <input class="button" type="submit" value=" 登 录 " />
      </p>
    </form>
  </div>
  <!-- End #login-content -->
</div>
<!-- End #login-wrapper -->
</body>
</html>