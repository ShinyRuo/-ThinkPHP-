<?php
class CommonAction extends Action{
	public function _initialize(){
		if (!isset($_SESSION['admin']['id']) || $_SESSION['admin']['id']==null){
			redirect(U('Login/login'));
		}
	}
}