<?php
class NoticeModel extends RelationModel{
	protected $_auto = array ( 
    array('time','time',1,'function'), // 对time字段在更新的时候写入当前时间戳
);
	
}