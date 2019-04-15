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
                <th>
                  <input class="check-all" type="checkbox" />
                </th>
                <th>姓名</th>
                <th>性别</th>
                <th>年龄</th>
                <th>密码</th>
                <th>操作</th>
              </tr>
            </thead>
            <tfoot>
              <tr>
                <td colspan="6">
                    <div class="bulk-actions align-left">
                      <label>所在大区</label>
                    <select name="dropdown">
                      <option value="option1">-选择大区-</option>
                      <option value="option2">河北1</option>
                      <option value="option3">河北2</option>
                  </select>
                      <label>职业</label>
                  <select name="dropdown">
                      <option value="option1">-选择大区-</option>
                      <option value="option2">河北1</option>
                      <option value="option3">河北2</option>
                  </select>
                      <label>部件</label>
                  <select name="dropdown">
                      <option value="option1">-选择大区-</option>
                      <option value="option2">河北1</option>
                      <option value="option3">河北2</option>
                    </select>&nbsp;
                    <a class="button" href="#"><b>搜 索</b></a> </div>
                  <div class="pagination"> <a href="#" title="First Page">&laquo; First</a><a href="#" title="Previous Page">&laquo; Previous</a> <a href="#" class="number" title="1">1</a> <a href="#" class="number" title="2">2</a> <a href="#" class="number current" title="3">3</a> <a href="#" class="number" title="4">4</a> <a href="#" title="Next Page">Next &raquo;</a><a href="#" title="Last Page">Last &raquo;</a> </div>
                  <!-- End .pagination -->
                  <div class="clear"></div>
                </td>
              </tr>
          </tfoot>

          <tbody>

              <!--表格的行-->
              <tr>
                <td>
                  <input type="checkbox" />
                </td>
                <td>Lorem ipsum dolor</td>
                <td><a href="#" title="title">Sit amet</a></td>
                <td>Consectetur adipiscing</td>
                <td>Donec tortor diam</td>
                <td>
                  <!-- Icons -->
                  <a href="#" title="Edit"><img src="__PUBLIC__/Admin/Images/icons/pencil.png" alt="Edit" /></a> <a href="#" title="Delete"><img src="__PUBLIC__/Admin/Images/icons/cross.png" alt="Delete" /></a> <a href="#" title="Edit Meta"><img src="__PUBLIC__/Admin/Images/icons/hammer_screwdriver.png" alt="Edit Meta" /></a> </td>
          </tr>
            
           
         
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