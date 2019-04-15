<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>后台管理</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/style1.css" type="text/css" media="screen" />
<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/invalid.css" type="text/css" media="screen" />
<!--                       Javascripts                       -->
<!-- jQuery -->
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery-1.3.2.min.js"></script>
<!-- jQuery Configuration -->
<script type="text/javascript" src="__PUBLIC__/Admin/Js/simpla.jquery.configuration.js"></script>
<!-- Facebox jQuery Plugin -->
<script type="text/javascript" src="__PUBLIC__/Admin/Js/facebox.js"></script>
<!-- jQuery WYSIWYG Plugin -->
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery.wysiwyg.js"></script>
<!-- jQuery Datepicker Plugin -->
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery.datePicker.js"></script>
<script type="text/javascript" src="__PUBLIC__/Admin/Js/jquery.date.js"></script>
</head>
<body>
<div id="body-wrapper">
  <!-- Wrapper for the radial gradient background -->
  <div id="sidebar">
    <div id="sidebar-wrapper">
      <!-- Sidebar with logo and menu -->
      <h1 id="sidebar-title"><a href="">后台管理</a></h1>
      <!-- Logo (221px wide) -->
      <a href="#"><img id="logo" src="__PUBLIC__/Admin/images/logo.png" alt="Simpla Admin logo" /></a>
      <!-- Sidebar Profile links -->
      <div id="profile-links"> 欢迎, <b> <?php echo ($_SESSION['admin']['username']); ?> </b>登录！<br />
        <br />
        <a href="#" title="个人信息">个人信息</a>　|　<a href="__APP__/Login/loginOut" title="退出" target="_top">退出</a> </div>
      <ul id="main-nav">
        <!-- Accordion Menu -->
        <li> <a href="#" class="nav-top-item no-submenu">用户管理</a>
            <ul>
            <li><a href="__APP__/User/userlist" target="right">浏览用户</a></li>
            <li><a href="__APP__/User/useradd" target="right">增加用户</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item"> 分类管理 </a>
          <ul>
            <li><a href="__APP__/Laveltype/typemanagedq" target="right">大区分类</a></li>
            <li><a href="__APP__/Laveltype/typemanagebj" target="right">部件分类</a></li>
            <li><a href="__APP__/Laveltype/typemanagezy" target="right">职业分类</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item"> 订单管理 </a>
          <ul>
            <li><a href="__APP__/Order/mkorder" target="right">生成订单</a></li>
          </ul>
        </li>
        <li> <a href="#" class="nav-top-item"> 公告管理 </a>
          <ul>
            <li><a href="__APP__/Notice/addnews" target="right">添加公告</a></li>
            <li><a href="__APP__/Notice/noticelist" target="right">公告浏览</a></li>
          </ul>
      
       
      <!-- End #main-nav -->
  
    </div>
</div>
 
</div>
</body>
<!-- Download From www.exet.tk-->
</html>