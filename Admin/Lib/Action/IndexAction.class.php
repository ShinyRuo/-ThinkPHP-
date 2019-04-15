<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends CommonAction {
    public function index(){
		$this->display();
    }
    
    public function left(){
    	$this->display();
    }
    
    public function right(){
    	$ip = get_client_ip();
    	$this->assign('ip',$ip);
    	$this->display();
    }
}