<?php
class RegisterAction extends Action{
    public function register(){
        $this->display();
	}
	public  function verify(){
	  import('ORG.util.Image');
	   Image::buildImageVerify(4,1,png,60,25,vcode);
	}
	 public function check(){
	 
	  $m= D('User');
	  $count= $m->where(array('username'=>$_GET['username']))->count();
	  echo $count;
	
	 }

    public function doRegister(){
	
	   if($_SESSION['vcode']!=md5($_POST['vcode']) || $_POST['vcode']==''){
	     $this->error('验证码有错误');
	   }else{
		   $m=D("User");
	     if(!$m->create()){
		   $this->error($m->getError());
		 }else{
		     
		    $id=$m->add();
		    
			$_SESSION['id']=$id;
 			$_SESSION['username']=$_POST['username'];
		   $this->success("恭喜您注册成功",U('Index/index'));
		 }
	    }
	
	}

}
?>
