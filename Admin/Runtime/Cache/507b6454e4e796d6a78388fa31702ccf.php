<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Simpla Admin by www.865171.cn</title>
<!--                       CSS                       -->
<!-- Reset Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/reset.css" type="text/css" media="screen" />
<!-- Main Stylesheet -->
<link rel="stylesheet" href="__PUBLIC__/Admin/Css/style.css" type="text/css" media="screen" />
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

  <!-- End #sidebar -->
  <div id="main-content">
  
  
    <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>后台添加数据模版</h3>
        <div class="clear"></div>
      </div>
  









      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
                   <form action="__APP__/User/douseradd" method="post">
            <fieldset>
            <!-- Set class to "column-left" or "column-right" on fieldsets to divide the form into columns -->
            <p>
         
              <label>用户名</label>
              <input class="text-input small-input" type="text" id="small-input" name="username" value=""/>
              </p>
               <label>密码</label>
              <input class="text-input small-input" type="password" id="small-input" name="password" value=""/>
              </p>
              <label>昵称</label>
              <input class="text-input small-input" type="text" id="small-input" name="nickname" value=""/>
              </p>
               <p>
              <label>性别</label>
              
              <input type="radio" name="sex" value="1" checked="checked"/>
              	男
              <input type="radio" name="sex" value="0"/>
              	女
              	</p>
              	<label>类型</label>
 
	              	<input type="radio" name="usertype" value="1"/>
	              	管理员
	              <input type="radio" name="usertype" value="0"  checked="checked"/>
	              	普通用户
              
              	</p>
              	
              	<p>
              <label>邮箱</label>
              <input class="text-input small-input" type="text" id="small-input" name="email" value=""/>
              </p>
              <label>QQ</label>
              <input class="text-input small-input" type="text" id="small-input" name="qq" value=""/>
              </p>
            <p>
              <input class="button" type="submit" value="Submit" />
            </p>
            </fieldset>
            <div class="clear"></div>
            <!-- End .clear -->
          </form>
         
        </div>
       
        <!-- End #tab2 -->
      </div>
      <!-- End .content-box-content -->
    </div>
    <!-- End .content-box -->
   
    <!-- End .content-box -->
  
    <!-- End .content-box -->
    <div class="clear"></div>
    <!-- Start Notifications -->
   
   
    
    

    <!-- End #footer -->
  </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>