<?php
	class OrderModel extends RelationModel{
		protected $_link = array(
			'Equip' => array(
				'mapping_type' => BELONGS_TO,
				'class_name' => 'Equip',
				'mapping_name' => 'equip',
				'foreign_key' => 'eqid',
				'mapping_fields' => 'eqname,pic,autimes,eqdes,price',
				'as_fields' => 'eqname,pic,autimes,eqdes,price',
			),
			
			'User' => array(
				'mapping_type' => BELONGS_TO,
				'class_name' => 'User',
				'mapping_name' => 'user',
				'foreign_key' => 'sellerid',
				'mapping_fields' => 'username',
				'as_fields' => 'username:sellername',
			),
		);
	}