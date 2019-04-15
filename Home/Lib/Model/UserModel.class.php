<?php
class UserModel extends RelationModel{
			
		protected $_link = array(
			'Message' => array(
				'mapping_type' => HAS_MANY,
				'class_name' => 'Message',
				'mapping_name' => 'Message',
				'foreign_key' => 'uid',
				'mapping_order' => 'id desc',
			),
			
			'Group' => array(
				'mapping_type' => MANY_TO_MANY,
				'class_name' => 'Group',
				'mapping_name' => 'Group',
				'foreign_key' => 'uid',
				'relation_foreign_key' => 'gid',
				'relation_table' => 'b_ug',
				//'mapping_fields' => 'name',
				'mapping_order' => 'id desc',
			),
		);
	
	protected $_auto = array(
		
			array('password',md5,1,'function'),
		);
		
		protected $_validate = array(
			array('username','require','用户名不能为空!!!'),
			array('username','',' 用户名已经存在!!!',0,'unique',1),
			array('nickname','require','昵称不能为空!!!'),
			array('password','require',' 密码不能为空!!!'),
			array('repassword','password',' 密码不一致!!!',0,'confirm'),
			array('vcode','require',' 验证码不能为空!!!'),
		);

}  

