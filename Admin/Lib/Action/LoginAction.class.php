<?php
class LoginAction extends Action{
	public function login(){
		$this->display();
	}
	//验证码 
	public function  verify(){
		import('ORG.Util.Image');	
		Image::buildImageVerify(4,5,'png',55,28);
	}
//登录的判断
		function checkLogin(){
			//dump($_POST);exit;
			$username=$_POST['username'];
			$password=md5($_POST['password']);
			$verify=md5(strtoupper($_POST['verify']));
			$severify=$_SESSION['verify'];
			$user=D('User');
            $pass=$user->field('id,password')->where(array('username'=>$username,'usertype'=>1))->find();
			if(!($username=="")){
				if($pass){
					if($pass['password']==$password){
						if($severify==$verify){
							$_SESSION['admin']['id']=$pass['id'];
							$_SESSION['admin']['username']=$username;
							//$this->success('登录成功!',U('Index/index'),3);
							$this->redirect('Index/index');
						}else{
							//$this->error('验证码输入错误!',U('Login/login'));
							$this->redirect('Login/login', array('logerror' => 4),0,'');
						}
					}else{
						//$this->error('密码输入错误!',U('Login/login'));
						$this->redirect('Login/login', array('logerror' => 3),0,'');
					}
					
				}else{
					//$this->error('用户名错误!',U('Login/login'));
					$this->redirect('Login/login', array('logerror' => 2),0,'');
				}
			}else{
				//$this->error('请输入用户名!',U('Login/login'));
				//redirect('Login/login',0,array('error' => 1));
				$this->redirect('Login/login', array('logerror' => 1),0,'');
				
			}
		}
		//退出
		function loginOut(){
			//清除session数组
			$_SESSION=array();
			//清除session文件
			session_destroy();
			//清除cookie文件
			if(isset($_COOKIE[session_name()])){
				setcookie(session_name(),'',time()-1,'/');
			}
			$this->redirect('Login/login');
		}
}
