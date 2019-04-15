<?php
class HomePageAction extends CommonAction{
   //luxu
    public function index(){
		
	    $where['username']=$_SESSION['username'];
		$user= D('User');
		$arr=$user->where($where)->select();

         $_SESSION['pic']=$arr[0]['pic'];
        $_SESSION['nickname']=$arr[0]['nickname'];
        //dump($arr);
		//exit;
		//$this->assign('arr',$arr);
		$this->display();
    }


	################################我是买家####################################
	
	//查看订单 订单列表中 buyerid = id 的 配合OrderModel类
	public function orderlist(){
		$order = D('Order');
		$where['buyerid']  = array('eq',$_SESSION['id']);
		if($_GET['p'] == ''){$_GET['p'] = 1;}
		$orderlist = $order->where($where)->relation(true)->page($_GET['p'].',7')->select();
		$this->assign('orderlist',$orderlist);
		//dump($orderlist);

		import('ORG.Util.Page');
        $count=$order->where($where)->count();
        $page=new Page($count,7);
        $show=$page->show();
		$this->assign('page',$show);
		$this->display();
	}

	//正在竞拍 	 配合AuctionModel类 
	public function auctioning(){
		$auction = D('Auction');
		$w['uid'] = array('eq',$_SESSION['id']);
		//找出竞拍记录表中 uid 是自己的所有商品id
		$eqids = $auction->field('eqid')->where($w)->select();
		foreach($eqids as $k=>$v){
			$ids[] = $v['eqid'];
		}

		//取出正在竞拍中商品
		$equip = D('Equip');
		$where['starttime'] = array('elt',time());
		$where['endtime'] = array('egt',time());
		$where['id'] = array('in',$ids);

		if($_GET['p'] == ''){$_GET['p'] = 1;}
		//在关联查询关系类中 已经把正在竞拍记录表中最高的价格查出 
		$equips = $equip->where($where)->relation(true)->page($_GET['p'].',7')->select();

		foreach($equips as $k=>$v){
			$condition['eqid'] = $v['id'];
			$condition['uid'] = $_SESSION['id'];
			//查出对应的每个商品我的最高出价 因为同一个商品我可能会出价多次
			$aumoney = $auction->where($condition)->order('aumoney desc')->limit(1)->getField('aumoney');
			//然后把最高价组装回数组中可以在模板中输出时做价格对比
			$equips[$k]['aumoney'] = $aumoney;
		}
		//dump($equips);
		$this->assign('auctioning',$equips);
		import('ORG.Util.Page');
        $count = $equip->where($where)->count();
		$Page = new Page($count,7);
		$show = $Page->show();
		$this->assign('page',$show);
		$this->display();
	}

	//竞拍历史
	public function auctionhistory(){
		$auction = D('Auction');
		$map['uid'] = array('eq',$_SESSION['id']);
		
		//找出竞拍记录表中 uid 是自己的所有商品id
		$eqids = $auction->field('eqid')->where($map)->select();
		foreach($eqids as $k=>$v){
			$ids[] = $v['eqid'];
		}

		//取出竞拍历史商品
		$equip = D('Equip');
		$w['endtime'] = array('lt',time());
		$w['id'] = array('in',array_unique($ids));
		if($_GET['p'] == ''){$_GET['p'] = 1;}
		//在关联查询关系类中 已经把竞拍记录表中最高的价格查出 
		$equips = $equip->where($w)->relation(true)->page($_GET['p'].',7')->select();
		foreach($equips as $k=>$v){
			$condition['eqid'] = $v['id'];
			$condition['uid'] = $_SESSION['id'];
			//查出对应的每个商品我的最高出价 因为同一个商品我可能会出价多次
			$aumoney = $auction->where($condition)->order('aumoney desc')->limit(1)->getField('aumoney');
			//然后把最高价组装回数组中可以在模板中输出时做价格对比
			$equips[$k]['aumoney'] = $aumoney;
		}
		//dump($equips);
		$this->assign('auctionhistory',$equips);
		import('ORG.Util.Page');
        $count = $equip->where($w)->count();
		$Page = new Page($count,7);
		$show = $Page->show();
		$this->assign('page',$show);
		$this->display();
	}
	##################################我是卖家##################################
	//无限分类表
	public function addauction(){
		$m = D('Typedq');
		$dq = $m->field("id,typename,pid,concat(path,'-',id) as newpath")->order("newpath")->select();
		array_shift($dq);
		$this->assign('dq',$dq);

		$m = D('Typezy');
		$zy = $m->field("id,typename,pid,concat(path,'-',id) as newpath")->order("newpath")->select();
		array_shift($zy);
		$this->assign('zy',$zy);

		$m = D('Typebj');
		$bj = $m->field("id,typename,pid,concat(path,'-',id) as newpath")->order("newpath")->select();
		array_shift($bj);
		$this->assign('bj',$bj);
		$this->display();
	}

	//添加商品
	public function doAddauction(){
	
		$_POST['starttime']=strtotime($_POST['starttime']);
		if($_POST['starttime'] < time()){
			$this->error('请选择正确的时间');
		}

		$user = D('User');
		$money = $user->where(array('id' => $_SESSION['id']))->getField('money');
		if($money < $_POST['hour']){
			$this->error("你的余额为:".$money ."请先充值");
		}

		$_POST['endtime'] = $_POST['starttime'] + $_POST['hour'] * 3600;
		$equip = D('Equip');
		if(!$equip->create()){
			$this->error($equip->getError());
		}else{
			import('ORG.Util.Image');
			$Image = new Image();

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/pics/';// 设置附件上传目录

			//设置三个同目录的缩略图 并删掉原图  但存在数据库中的图片名称是没有前缀的 用的时候自己加上大中小的前缀就可以了
			$upload->thumb = true;
			$upload->thumbRemoveOrigin = true;
			$upload->thumbMaxWidth = '50,100,400';
			$upload->thumbMaxHeight = '50,100,400';
			$upload->thumbPrefix = 's_,m_,b_';

			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
			}
			$equip->pic = $info[0]['savename'];
			if(!$equip->add()){
				$this->error('添加商品失败，请联系管理员');
			}else{
				$total = $money - $_POST['hour'];
				$cut['money'] = $total;
				$user->where(array('id' => $_SESSION['id']))->save($cut);
				$this->success('添加成功,从您账户中以扣除'.$_POST['hour'].'元 账户余额'.$total.'元','addauction',5);
			}
		}
	}

	//历史商品		装备表中uid=session_id 并且结束时间小于现在时间商品  拍卖结果为1的代表已成功拍卖出去的
	public function auctionlist(){

	    if ($_GET['p']==null){$_GET['p']=1;}
		$equip = D('Equip');
		$where['uid'] = $_SESSION['id'];
		$where['endtime'] = array('lt',time());
		$arr = $equip->where($where)->page($_GET['p'].',7')->order('endtime desc')->select();
		$this->assign('list',$arr);
		// dump($arr);
		 import('ORG.Util.Page');
        $count=$equip->where($where)->count();
		//echo $count;
        $page=new Page($count,7);
        $show=$page->show();
		$this->assign('page',$show);
		$this->display();
	}

	//正在竞拍
	public function sellerauctioning(){

		if ($_GET['p']==null){$_GET['p']=1;}
		$equip = D('Equip');
		$where['uid'] = $_SESSION['id'];
		$where['starttime'] =array('elt',time());
		$where['endtime'] = array('egt',time());
		$arr = $equip->where($where)->page($_GET['p'].',7')->order('starttime asc')->select();
		$this->assign('list',$arr);
		 import('ORG.Util.Page');
        $count=$equip->where($where)->count();
        $page=new Page($count,7);
        $show=$page->show();
		$this->assign('page',$show);
		$this->display();
	}

	//即将竞拍
	public function sellerfuture(){

		if ($_GET['p']==null){$_GET['p']=1;}
		$equip = D('Equip');
		$where['uid'] = $_SESSION['id'];
		$where['starttime'] =array('gt',time());
		$arr = $equip->where($where)->page($_GET['p'].',7')->order('starttime asc')->select();

		$this->assign('list',$arr);
		 import('ORG.Util.Page');
        $count=$equip->where($where)->count();
		//echo $count;exit;
        $page=new Page($count,7);
        $show=$page->show();
		$this->assign('page',$show);
		$this->display();
	}


	//订单管理
	public function ordermanage(){
		$order = D('Order');
		$where['sellerid']  = array('eq',$_SESSION['id']);
		if($_GET['p'] == ''){$_GET['p'] = 1;}
		$orderlist = $order->where($where)->relation(true)->page($_GET['p'].',7')->select();
		foreach($orderlist as $k=>$v){
			$user = D('User');
			$w['id'] = array('eq',$v['buyerid']);
			$buyername = $user->where($w)->getField('username');
			$orderlist[$k]['buyername'] = $buyername;
		}
		$this->assign('orderlist',$orderlist);

		import('ORG.Util.Page');
        $count=$order->where($where)->count();
        $page=new Page($count,7);
        $show=$page->show();
		$this->assign('page',$show);
		$this->display();
	}

	//处理订单
	public function deal(){
		
		$money = $_POST['total'];
		$buyer = $_POST['buyer'];
		$eqid = $_POST['id'];
		
		$order = D('Order');
		//把订单中的处理状态更新为1（已发货），并加入成交时间
		$where['id'] = array('eq',$eqid);
		$data['ostatus'] = 1;
		$data['dealtime'] = time();
		$num = $order->where($where)->save($data);
		//dump($data);exit;
		
		$user = D('User');
		//从买家账户减掉成交价格
		$dw['username'] = array('eq',$buyer);
		$desc = $user->where($dw)->setDec('money',$money);
		
		//发货后把竞拍成交价加到卖家账户中
		$w['id'] = array('eq',$_SESSION['id']);
		$n = $user->where($w)->setInc('money',$money);
		$total = $user->where($w)->getField('money');
		$this->success('已发货，你的账户已添加了'.$money.'元;账户余额为'.$total,U('HomePage/ordermanage'),5);
		}


	#############################账户信息################################
		public  function editinfo(){
	 $where['username']=$_SESSION['username'];
		$user= D('User');
		$data=$user->where($where)->select();
		$this->assign('data',$data);
	     $this->display();
	}
	public function complete(){
		 $user=D('User');
		$data['nickname']=$_POST['nickname'];
	     $data['qq']=$_POST['qq'];
		 $data['email']=$_POST['email'];
		 $data['sex']=$_POST['sex'];
		 $where['username']=$_SESSION['username'];
		 $a=$user->where($where)->save($data);


	 if($a>0){
		   $this->success('恭喜您修改成功',editinfo);
		  }else if($a==0){
		    $this->error('未修改任何资料');
		  }else{
		    $this->error('修改资料失败');
		  }


		 //dump($_POST);


	}
	public function pointcard(){

		   $user=D('User');
		   $where['username']=$_SESSION['username'];
		   $arr=$user->where($where)->select();

		   $this->assign('arr',$arr);
		   $this->display();
	}

	public  function wushi(){




		$user=D('User');
	$where['username']=$_SESSION['username'];
		$data=$user->where($where)->select();
		$old['money']=50 *($_POST['wushi']);
        $a=((int)($data[0]['money']));
		$money['money']=$a+$old['money'];
	/*	echo $old["money"];
		echo"<hr/>";
		dump ((int)($data[0]['money']));
		echo"<hr/>";
		dump($money['money']);
		exit;
	 $data['money']
	 */
		 $a=$user->where($where)->save($money);
	  if($a>0){
	     $this->success('充值成功',pointcard);
	  }else{
	    $this->error('充值失败');
	  }

	}

	public  function yibai(){
 	$user=D('User');
	$where['username']=$_SESSION['username'];
		$data=$user->where($where)->select();
		$old['money']=100 *($_POST['yibai']);
        $a=((int)($data[0]['money']));
		$money['money']=$a+$old['money'];
		 $a=$user->where($where)->save($money);
	  if($a>0){
	     $this->success('充值成功',pointcard);
	  }else{
	    $this->error('充值失败');
	  }

	}
		public  function erbai(){
 	$user=D('User');
	$where['username']=$_SESSION['username'];
		$data=$user->where($where)->select();
		$old['money']=200 *($_POST['erbai']);
        $a=((int)($data[0]['money']));
		$money['money']=$a+$old['money'];
		 $a=$user->where($where)->save($money);
	  if($a>0){
	     $this->success('充值成功',pointcard);
	  }else{
	    $this->error('充值失败');
	  }

		}
	public  function wubai(){
 	$user=D('User');
	$where['username']=$_SESSION['username'];
		$data=$user->where($where)->select();
		$old['money']=500 *($_POST['wubai']);
        $a=((int)($data[0]['money']));
		$money['money']=$a+$old['money'];
		 $a=$user->where($where)->save($money);
	  if($a>0){
	     $this->success('充值成功',pointcard);
	  }else{
	    $this->error('充值失败');
	  }

	}
   public function newpwd(){

		 $user=D('User');
		 $where['username']=$_SESSION['username'];
		 $data=$user->where($where)->select();

     	 $a=md5($_POST['oldPassword']);
		 $b=$data[0]['password'];


	if($a!==$b){
	    $this->error('您密码输入错误,您还有三次机会!!');

	}elseif($_POST['password']==''){
		$this->error('密码不能为空');
	}elseif($_POST['password']!==$_POST['password2']){
		    $this->error('两次密码输入不一致！！');

		 }else{
			    $password['password']=md5($_POST['password']);
               $user->where($where)->save($password);
		     $this->success('修改成功!!',editpword);
		 }

   }
      public function doAnswer(){


		     $user=D('User');
		      $where['username']=$_SESSION['username'];
		    if($_POST['answer']==''){
			   $this->error('答案不能为空！！');
			}else{
				$data['question']=$_POST['question'];
				$data['answer']=$_POST['answer'];
				$a=$user->where($where)->save($data);
				  if($a>0){
				    $this->success('密保修改成功',answer);
				  }else{
				    $this->error('密保修改失败');
				  }

			}
	  }
	   public  function editavatar(){
	      $user=D('User');

	  	$where['username']=$_SESSION['username'];
		  $arr=$user->where($where)->select();
		  $this->assign('arr',$arr);
	      $this->display();
	   }
       public function touxiang(){
          import('ORG.Util.Image');
		 	$Image = new Image();

			import('ORG.Net.UploadFile');
			$upload = new UploadFile();// 实例化上传类
			$upload->allowExts  = array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型
			$upload->savePath =  './Public/Uploads/pic/';// 设置附件上传目录

			//设置三个同目录的缩略图 并删掉原图  但存在数据库中的图片名称是没有前缀的 用的时候自己加上大中小的前缀就可以了
			$upload->thumb = true;
			$upload->thumbRemoveOrigin = true;
			$upload->thumbMaxWidth = '50,100,400';
			$upload->thumbMaxHeight = '50,100,400';
			$upload->thumbPrefix = 's_,m_,b_';


			if(!$upload->upload()) {// 上传错误提示错误信息
				$this->error($upload->getErrorMsg());
			}else{// 上传成功 获取上传文件信息
				$info =  $upload->getUploadFileInfo();
            $user=D('User');

				$data['pic']= $info[0]['savename'];
				$where['username']=$_SESSION['username'];
				$user->where($where)->save($data);
				$arr=$user->where($where)->select();
				$this->success('头像上传成功',editavatar);
			}


	   }
}
?>
