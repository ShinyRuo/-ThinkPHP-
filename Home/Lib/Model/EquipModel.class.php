<?php
	class EquipModel extends RelationModel{
		protected $_validate = array(
			array('eqname','require','商品名称不能为空'),
			array('qiang','require','强化等级不能为空'),
			array('qiang','number','强化等级必须是整数'),
			array('price','require','价格不能为空'),
			array('price','currency','请填写正确的价格'),
			
		);
		
		protected $_link = array(
			'Typedq' => array(
				'mapping_type' => BELONGS_TO,
				'class_name' => 'Typedq',
				'mapping_name' => 'typedq',
				'foreign_key' => 'quid',
				'mapping_fields' => 'typename',
				'as_fields' => 'typename:dq'
			),
			
			'Typezy' => array(
			'mapping_type' => BELONGS_TO,
			'class_name' => 'Typezy',
			'mapping_name' => 'typezy',
			'foreign_key' => 'zyid',
			'mapping_fields' => 'typename',
			'as_fields' => 'typename:zy',

		),
		
			'Typebj' => array(
			'mapping_type' => BELONGS_TO,
			'class_name' => 'Typebj',
			'mapping_name' => 'typebj',
			'foreign_key' => 'bjid',
			'mapping_fields' => 'typename',
			'as_fields' => 'typename:bj',
		),
		
			'User' => array(
				'mapping_type' => BELONGS_TO,
				'class_name' => 'User',
				'mapping_name' => 'user',
				'foreign_key' => 'uid',
				'mapping_fields' => 'username',
				//直接映射为卖家名称username
				'as_fields' => 'username',
			),
		
			'Auction' => array(
				'mapping_type' => HAS_MANY,
				'class_name' => 'Auction',
				'mapping_name' => 'auction',
				'foreign_key' => 'eqid',
				//结束时间后，最高价格就是成交价
				'mapping_order' => 'aumoney desc',
				'mapping_limit' => 1,
				//'mapping_fields' => 'aumoney',
				//'as_fields' => 'aumoney',
			),
		);
		
	}