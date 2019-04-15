<?php
class NoticeAction extends CommonAction{

	function addnews(){
		$this->display();
	}
	function doNotice(){
		$notice=D('Notice');
		$notice->create();
		if($notice->add()){
			redirect(U("Notice/addnews"));
		}else {
			$this->error('添加失败！','Notice/addnews',3);
		}
	}
	
	function noticelist(){
		$notice=D('Notice');
		$data=$notice->select();
		$this->assign('list',$data);
		//dump($data);
		$this->display();
	}
	
	function upnotice(){
		$id=$_GET['id'];
		$where=array('id'=>$id);
		$notice=D('Notice');
		$data=$notice->where($where)->find();
		$this->assign('data',$data);
		$this->display();
		//dump($data);
	}
	function doupnotice() {
		$notice=D('Notice');
		//dump($_POST);exit;
		$where=array('id'=>$_POST['id']);
		$data['title']=$_POST['title'];
		$data['content']=$_POST['content'];
		$notice->where($where)->save($data);
		redirect(U('Notice/noticelist'));
		
	}
	function delnotice(){
		$where=array('id'=>$_GET['id']);
		$notice=D('Notice');
		$notice->where($where)->delete();
		redirect(U('Notice/noticelist'));
	}
}