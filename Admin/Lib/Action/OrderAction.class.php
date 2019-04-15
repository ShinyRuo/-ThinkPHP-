<?php 
	class OrderAction extends CommonAction{
		public function mkorder(){
			$equip = D('Equip');
			$auc=D('Auction');
			//拍卖结束时间小于现在时间的就是历史拍卖的商品
			$where['endtime'] = array('lt',time());
			//判断竞拍次数大于0的（被竞拍过的）
			$where['autimes'] = array('gt',0);
			//没有生成过订单
			$where['isorder'] = array('eq',0);
			//查处符合条件的装备id 和卖家的id（uid）
			$onum=0;
			$arr = $equip->field("id,uid")->where($where)->select();
			//dump($arr);exit;
			foreach ($arr as $key => $value) {
			
					$auwhere['eqid']=array('eq',$value['id']);
					//查出最高价格
					$au=$auc->where($auwhere)->max('aumoney');
					//dump($au);exit;
					$auwhere['aumoney']=array('eq',$au);
					$arrr=$auc->where($auwhere)->find();
					//dump($arrr);exit;
					//生成订单
					$order = M("Order"); // 实例化User对象
					$data['eqid'] = $value['id'];
					$order_num=date('YmdHis',time()).mt_rand(0,1000);
					$data['onum'] = $order_num;
					$data['total'] = $arrr['aumoney'];
					$data['buyerid'] = $arrr['uid'];
					$data['sellerid'] = $value['uid'];
					$data['otime'] = time();
					//dump($data);exit;
					$order->create($data);
					//dump($order);exit;
					$order->add($data);
					unset($data);
					unset($auwhere);
					//将已经生成订单的装备表中的isorder改为1，防止重复订单生成
					$w['id']=array('eq',$value['id']);
					$audata['isorder']=1;
					$equip->where($w)->save($audata);
					$onum++;

			
			}
			//dump($arr);
			$this->assign('onum',$onum);
			//echo $onum++;
			$this->display();
		}
	}

