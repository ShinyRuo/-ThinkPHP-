<?php
class AuctionModel extends RelationModel{
	
	protected $_validate = array(
			array('aumoney','require','价格不能为空'),
			array('aumoney','currency','请填写正确的价格'),
	);
	
	protected $_auto = array(
		array('autime','time',1,'function'),
	);
	
	protected $_link = array(
		'Equip' => array(
			'mapping_type' => BELONGS_TO,
			'class_name' => 'Equip',
			'mapping_name' => 'equip',
			'foreign_key' => 'eqid',
		),
	);
}