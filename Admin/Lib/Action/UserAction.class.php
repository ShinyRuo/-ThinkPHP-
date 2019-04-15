<?php
class UserAction extends CommonAction{
	function userlist(){
		$user=D('User');
		$data=$user->select();
		$this->assign('data',$data);
		//dump($data);
		$this->display();
	}
	
	function userdel(){
		//dump($_GET);
		$where=array('id'=>$_GET['id']);
		$user=D('User');
		$user->where($where)->delete();
		redirect(U('User/userlist'));
		
	}
	
	function userup(){
		//dump($_GET);
		$user=D('User');
		$where=array('id'=>$_GET['id']);
		$data=$user->where($where)->find();
		$this->assign('data',$data);
		//dump($data);
		$this->display();
	}
	function douserup(){
		//dump($_POST); 
		
		$user=D('User');
		$where=array('id'=>$_POST['id']);
		$user->where($where)->save($_POST);
		redirect(U('User/userlist'));
	}
	
	function useradd(){
		$this->display();
	}
	function douseradd(){
		$_POST['password']=md5($_POST['password']);
		$user=D('User');
		$user->add($_POST);
		redirect(U('User/userlist'));
	}
}