<?php
    header('content-type:text/html;charset=utf-8');
class LoginAction extends Action{
    public function login(){
        $this->display();
	}

	   public function verify(){
	      import('ORG.util.Image');
	      Image::buildImageVerify(4,1,png,60,25,vcode);
	   }


	   public function doLogin(){
	   
	     $username=$_POST['username'];
		 $password=md5($_POST['password']);
		 $vcode=$_POST['vcode'];
		 if($_SESSION['vcode']!= md5($vcode)){
		   $this->error('验证码填写错误');
		 } 
		 $user= D('User');
		
            
           $where['username']=$username;
		   $where['password']=$password;
	
              
		   
		$id=$user->field('id')->where($where)->getField();
		   
	    if($id>0){
		     $_SESSION['id']=$id;
			 $_SESSION['username']=$username;
			 //dump($_SESSION);exit;
		$this->redirect('Index/index');
		}else{
		
		    $this->error('抱歉，您登入失败！');
		}
	   }

		public function doLogout(){
			$_SESSION = array();
			if(isset($_COOKIE[session_name()])){
				setCookie(session_name(),'',time()-1,'/');
			}
			session_destroy();
			$this->redirect('Index/index');
		}

	   public function getMibao(){
	   
	  // dump($_POST);
	   $user=D('User');
	             
	   $where['username']=$_POST['m_username'];
 	   $where['question']=$_POST['question'];
        $where['answer']=$_POST['m_answer'];  
	   $data=$user->field('id')->where($where)->find();
	   if($data>0){
       $arr=$user->where($where)->select();
	     $_SESSION['id']=$arr[0]['id'];
		     $this->success('信息正确请重新修改您的密码',editword);
		  }else{
		     $this->error('您所填入的信息错误，请重新填写');
		  
		  }
	   }
	   public function editMibao(){
	     $user=D('User');
	      $where['id']=$_SESSION['id'];
		 if($_POST['newpassword']==''){
		   $this->error('密码不能为空！！！');
		 }elseif($_POST['newpassword']!==$_POST['repassword']){
		    $this->error('密码填写不一致！！！');
		 }else{
		      $data['password']=md5($_POST['newpassword']);
			  $user->where($where)->save($data);
			   $a=$user->where($where)->select();
			    $_SESSION['username']=$a[0]['username'];
			  $this->success('密码修改成功',"__APP__/Index/index");
		 }
	   }
}
?>
