<?php
// 本类由系统自动生成，仅供测试用途
class IndexAction extends Action {
    public function index(){
	
	//最新成交 		只要订单表里面订单处理状态ostatus结果为1的代表是交易成功的(卖家已经发货的了)
		$order  = D('Order');
		$where['ostatus']  = array('eq','1');
		$deals = $order->where($where)->relation(true)->order('dealtime desc')->limit(7)->select();
		//dump($deals);
		$this->assign('newdeals',$deals);
		
		
	//热门商品
		$equip = D('Equip');
		$map['starttime'] = array('elt',time());
		$map['endtime'] = array('egt',time());
		$hots = $equip->where($map)->relation(true)->order("autimes desc")->limit(6)->select();
		//dump($hots);
		$this->assign('hots',$hots);
		$this->display();		
    }
	
	//最新成交（more）
	public function suchistory(){
		$order  = D('Order');
		$where['ostatus']  = array('eq','1');
		if($_GET['p'] == ''){$_GET['p'] = 1;}
		$moredeals = $order->where($where)->relation(true)->order('dealtime desc')->page($_GET['p'].',10')->select();

		//查出买家并塞回去数组中
		foreach($moredeals as $k=>$v){
			$user = D('User');
			$w['id'] = array('eq',$v['buyerid']);
			$buyer = $user->where($w)->getField('username');
			$moredeals[$k]['buyer'] = $buyer;
		}
		$this->assign('moredeals',$moredeals);
		//dump($moredeals);
		import('ORG.Util.Page');
        $count=$order->where($where)->count();
		$page = new Page($count,10);
		$show = $page->show();
		$this->assign('page',$show);
		$this->display();		
	}
	
	//即将拍卖
	public function future (){
		$equip = D('Equip');
		$where['starttime'] = array('gt',time());
		$count = $equip->where($where)->count();
		//dump($count);
		import('ORG.Util.Page');
		$page = new Page($count,7);
		$show = $page->show();
		$this->assign('page',$show);
		$equips = $equip->where($where)->order('starttime asc')->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		//dump($equips);
		$this->assign('future',$equips);
		$this->display();
	}
	
	
	//历史拍卖 ：分交易成功 与交易失败的， 配合Model文件夹中 EquipModel类关联Action竞拍记录表   如果没有记录的说明没有卖出
	public function history(){
		$equip = D('Equip');
		//拍卖结束时间小于现在时间的就是历史拍卖的商品
		$where['endtime'] = array('lt',time());
		if($_GET['p'] == ''){$_GET['p'] = 1;}
		$arr = $equip->where($where)->relation(true)->order('endtime desc')->page($_GET['p'].',10')->select();
		//查出买家并塞回去数组中
		foreach($arr as $k=>$v){
			$user = D('User');
			$w['id'] = array('eq',$v['auction'][0]['uid']);
			$buyer = $user->where($w)->getField('username');
			$arr[$k]['buyer'] = $buyer;
		}
		$this->assign('arr',$arr);

		import('ORG.Util.Page');
        $count=$equip->where($where)->count();
        $page=new Page($count,10);
        $show=$page->show();
		$this->assign('page',$show);		
		$this->display();
	}
	
	//搜索功能 分页
    public function search(){
        //接收header表单提交过来的搜索信息从数据库拿东西
		$equip = D('Equip');
		$eqname = $_GET['search'];
		$where['eqname'] = array('like','%'.$eqname.'%');
		$count = $equip->where($where)->count();
		if(!$count > 0){
			$this->error('查不到相关的商品');
		}
		import('ORG.Util.Page');
		$page = new Page($count,10);
		foreach($where as $k=>$v){
			//$Page->parameter .= "$k=".urlencode($eqname)."&";  
			$Page->parameter .= "$k=".urlencode($v[1])."&"; //同上功能一样 注意的是 $Page 的P不能为小写 否则会点击下一页的时候会出来全部数据
		}
		$show = $page->show();
		$list = $equip->where($where)->relation(true)->limit($page->firstRow.','.$page->listRows)->select();
		//dump($list);
		$this->assign('page',$show);
		$this->assign('list',$list);
        $this->display();
    }


   public  function newsb(){

   	$equiq=D('Equip');
   	$where['starttime'] = array('elt',time());
	$where['endtime'] = array('egt',time());
	
	
	//在关联查询关系类中 已经把正在竞拍记录表中最高的价格查出 
	$equips = $equiq->where($where)->limit("12")->order("starttime desc")->relation(true)->select();
	//dump($equips);
	
	foreach ($equips as  $key=>$value) {
		$equips[$key]['sheng']=$value['endtime']-time();

		//dump($value);
	}
	//dump($equips);
	echo 	json_encode($equips);
	//echo time();
   }
   public function info(){
   //	echo $_GET['id'];
   if(!isset($_SESSION['id'])){
		$this->error('请先登陆',U('Login/login'));
   }
   	$this->assign("eqid",$_GET['id']);
   	$equiq=D('Equip');
   	$where['starttime'] = array('elt',time());
	$where['endtime'] = array('egt',time());
	$where['id']=array('eq',$_GET['id']);
	
	
	//在关联查询关系类中 已经把正在竞拍记录表中最高的价格查出 
	$equips = $equiq->where($where)->limit("12")->order("starttime desc")->relation(true)->find();
	$this->assign("picc",$equips['pic']);
	$this->assign("dq",$equips['dq']);
	$this->assign("zy",$equips['zy']);
	$this->assign("bj",$equips['bj']);
	$this->assign("eqname",$equips['eqname']);
	$this->assign("eqdes",$equips['eqdes']);
	$this->assign("vender",$equips['vender']);

	$user=D('User');
	$uwhere['id']=array('eq',$_SESSION['id']);
	$upic = $user->where($uwhere)->getField('pic');
	$this->assign("upic",$upic);
	//dump($upic);
	//dump($equips);
   	$this->display();
   }
   
   //竞拍出价
   public function buy(){

		$auction = D('Auction');
		if(!$auction->create()){
			$this->error($auction->getError());
		}else{
			$aumoney = $_POST['aumoney'];
			$supermoney = $_POST['supermoney'];
			
			if($aumoney <= $supermoney){
				$this->error('您的出价比现竞价低，请继续加价');
			}
			
			$user = D('User');
			$money = $user->field('money')->where(array('id'=>$_SESSION['id']))->getField('money');
			if($aumoney > $money){
				$this->error('你的账户余额不足，请先充值');
			}
	
			$auction->uid = $_SESSION['id'];
			if(!$auction->add()){
				$this->error('竞价失败，请联系管理员');
			}
			$equip = D('equip');
			$num = $equip->where(array('id'=>$_POST['eqid']))->setInc('autimes');
			if($num <= 0){
				$this->error('竞价失败，请联系管理员');
			}	
		}
		$this->success('竞价成功',U('Index/index'),5);
   }

   
   public function jsinfo(){
	$equiq=D('Equip');
   	$where['starttime'] = array('elt',time());
	$where['endtime'] = array('egt',time());
	$where['id']=array('eq',$_GET['id']);
	
	
	//在关联查询关系类中 已经把正在竞拍记录表中最高的价格查出 
	$equips = $equiq->where($where)->limit("12")->order("starttime desc")->relation(true)->select();
	//dump($equips);
	foreach ($equips as  $key=>$value) {
		$equips[$key]['sheng']=$value['endtime']-time();
	}

	echo 	json_encode($equips);


   }

   //正在拍卖中的商品
   public function auctioning(){

   	$equip=D('Equip');
   	$where['starttime'] = array('elt',time());
	$where['endtime'] = array('egt',time());

	//如果p不存在设置为空
	if($_GET['p'] == ''){$_GET['p'] = 1;}
	$this->assign('pp',$_GET['p']);
	
	import('ORG.Util.Page');
    	$count=$equip->where($where)->count();
             $page=new Page($count,10);
             $show=$page->show();
	$this->assign('page',$show);		

	$this->display();
   }

   public function jsauct(){

   	$equip=D('Equip');
   	$where['starttime'] = array('elt',time());
	$where['endtime'] = array('egt',time());

	//如果p不存在设置为空
	if($_GET['p'] == ''){$_GET['p'] = 1;}
	$this->assign('pp',$_GET['p']);
	$equips = $equip->where($where)->page($_GET['p'].',10')->order("starttime desc")->relation(true)->select();
	
	



	//在关联查询关系类中 已经把正在竞拍记录表中最高的价格查出 
	foreach ($equips as  $key=>$value) {
		$equips[$key]['sheng']=$value['endtime']-time();
	}
	//$equips['page']=$show;
	//dump($equips);
	//dump($equips);exit;
	echo 	json_encode($equips);
   }

 
}
