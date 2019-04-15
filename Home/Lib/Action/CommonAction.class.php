<?php
class CommonAction extends Action{
	public function _initialize(){
	   if(!isset($_SESSION['id'])){
			$this->error('请先登陆',U('Login/login'));
		}        
	}
}
