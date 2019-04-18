<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8" />
<title>后台管理</title>
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
    <!-- Page Head -->
   
    <!-- End .shortcut-buttons-set -->
    <div class="clear"></div>
    <!-- End .clear -->
    <div class="content-box">
      <!-- Start Content Box -->
      <div class="content-box-header">
        <h3>拍卖装备列表</h3>
            
        <div class="clear"></div>
      </div>
      <!-- End .content-box-header -->
      <div class="content-box-content">
        <div class="tab-content default-tab" id="tab1">
          <!-- This is the target div. id must match the href of this div's tab -->
          <div class="notification attention png_bg"> 
          </div>
          <table>
            <thead>
              <tr>
                <th colspan="2">
        <!--判断action开始-->
            	<?php if($_GET['action']== 'add'): ?><form action="__URL__/addTypezy" method="post">
				<input type="hidden" name="pid" value="<?php echo ($_GET['id']); ?>"/>
				<input type="hidden" name="path" value="<?php echo ($_GET['path']); ?>"/>
				添加<b><font color="#A21717"><?php echo ($_GET['typename']); ?></font></b>的子类别：
				<input type="text" name="typename"/>
				<input type="submit" value="添加"/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="__URL__/typemanagezy">添加根级分类</a>
			</form>
	<?php elseif($_GET['action']== 'upname'): ?>
			<form action="__URL__/upnamezy" method="post">
				将<b><font color="#A21717"><?php echo ($_GET['typename']); ?></font></b>的名字改为：
				<input type="hidden" name="id" value="<?php echo ($_GET['id']); ?>"/>
				<input type="text" name="typename"/>
				<input type="submit" value="确定"/>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="__URL__/typemanagezy">添加根级分类</a>
			</form>
	<?php else: ?> 
			<form action="__URL__/addroottypezy" method="post">
                <b>添加<font color="#A21717">根级</font>分类：</b>
				<input type="text" name="typename"/>
				<input type="submit" value="确定"/>
			</form><?php endif; ?>



        <!--判断action结束-->
                </th>
              </tr>
                <td>分类名称</td>
                <td>操作</td>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="2">
                  
                  <div class="pagination"> <?php echo ($page); ?> </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
          </tfoot>

          <tbody>

              <!--遍历类别开始-->

            <?php if(is_array($list)): foreach($list as $key=>$vo): ?><tr>
                <td>|<?php echo (str_repeat("__",count(explode("-",$vo["newpath"])))); ?>|<?php echo ($vo["typename"]); ?></td>
              
                <td>
                  <!-- Icons -->
                  <a href="__URL__/typemanagezy/action/add/id/<?php echo ($vo["id"]); ?>/path/<?php echo ($vo["newpath"]); ?>/typename/<?php echo ($vo["typename"]); ?>" title="添加子类别"><img src="__PUBLIC__/Admin/Images/icons/pencil.png" alt="添加子类别" /></a> 
                  <a href="__URL__/deltypezy/id/<?php echo ($vo["id"]); ?>" title="删除子类别"><img src="__PUBLIC__/Admin/Images/icons/cross.png" alt="删除子类别" /></a>
                 <a href="__URL__/typemanagezy/action/upname/id/<?php echo ($vo["id"]); ?>/typename/<?php echo ($vo["typename"]); ?>" title="修改类别名称"><img src="__PUBLIC__/Admin/Images/icons/hammer_screwdriver.png" alt="修改类别名称" /></a> </td>
          </tr><?php endforeach; endif; ?>
              <!--遍历类别结束-->

            </tbody>
          </table>
      </div>
      </div>
      <!-- End .content-box-content -->
    </div>
  </div>
  <!-- End #main-content -->
</div>
</body>
<!-- Download From www.exet.tk-->
</html>