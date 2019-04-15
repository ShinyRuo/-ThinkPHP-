<?php
class LaveltypeAction extends CommonAction{
	//职业-----------------------------------------------------------------------------------
	function typemanagezy(){
		echo "zy";
        $type=D('typezy');
        if ($_GET['p']==null){$_GET['p']=1;}
        $data=$type->field("id,typename,pid,concat(path,'-',id) as newpath")->order('newpath')->page($_GET['p'].',25')->select();
        $this->assign('list',$data);
        import('ORG.Util.Page');
        $count=$type->count();
        $page=new Page($count,25);
        $show=$page->show();
		
		//dump($data);
		$this->assign('page',$show);
        
        
        $this->display();
	}
	
	function addTypezy(){
		$type=D('typezy');
		$type->create();
		
		if ($type->add()){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagezy'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagezy'));
		}		
		
	}
	
	function deltypezy(){
		$type=D('typezy');
		$where="id=".$_GET['id'];
		$res=$type->where($where)->delete();
		if($res){
			//$this->success('删除成功!',U('Laveltype/typemanage'));
            redirect(U('Laveltype/typemanagezy'));
		}else{
			$this->error('删除失败！',U('Laveltype/typemanagezy'));
		}
	}
	function addroottypezy(){
		$type=D('typezy');
		$data=array(
			'typename'=>$_POST['typename'],
			'pid'=>0,
			'path'=>0,
		);
		if ($type->add($data)){
            //$this->success('添加成功!',U('Laveltype/typemanage'),1);
            redirect(U('Laveltype/typemanagezy'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagezy'));
		}		
	}
	
	function upnamezy(){
		$type=D('typezy');
		$where="id=".$_POST['id'];
		$data['typename']=$_POST['typename'];
		$res=$type->where($where)->save($data);  
		if ($res){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagezy'));
		}else {
			$this->error('修改失败！',U('Laveltype/typemanagezy'));
		}		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//部件----------------------------------------------------------------------
	
function typemanagebj(){
		echo "ssssss";
        $type=D('typebj');
        if ($_GET['p']==null){$_GET['p']=1;}
        $data=$type->field("id,typename,pid,concat(path,'-',id) as newpath")->order('newpath')->page($_GET['p'].',25')->select();
        $this->assign('list',$data);
        import('ORG.Util.Page');
        $count=$type->count();
        $page=new Page($count,25);
        $show=$page->show();
		
		//dump($data);
		$this->assign('page',$show);
        
        
        $this->display();
	}
	
	function addTypebj(){
		$type=D('typebj');
		$type->create();
		
		if ($type->add()){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagebj'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagebj'));
		}		
		
	}
	
	function deltypebj(){
		$type=D('typebj');
		$where="id=".$_GET['id'];
		$res=$type->where($where)->delete();
		if($res){
			//$this->success('删除成功!',U('Laveltype/typemanage'));
            redirect(U('Laveltype/typemanagebj'));
		}else{
			$this->error('删除失败！',U('Laveltype/typemanagebj'));
		}
	}
	function addroottypebj(){
		$type=D('typebj');
		$data=array(
			'typename'=>$_POST['typename'],
			'pid'=>0,
			'path'=>0,
		);
		if ($type->add($data)){
            //$this->success('添加成功!',U('Laveltype/typemanage'),1);
            redirect(U('Laveltype/typemanagebj'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagebj'));
		}		
	}
	
	function upnamebj(){
		$type=D('typebj');
		$where="id=".$_POST['id'];
		$data['typename']=$_POST['typename'];
		$res=$type->where($where)->save($data);  
		if ($res){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagebj'));
		}else {
			$this->error('修改失败！',U('Laveltype/typemanagebj'));
		}		
	}
	
	
	
	
	
	//大区-----------------------------------------------------------------------------------
	function typemanagedq(){
	
        $type=D('typedq');
        if ($_GET['p']==null){$_GET['p']=1;}
        $data=$type->field("id,typename,pid,concat(path,'-',id) as newpath")->order('newpath')->page($_GET['p'].',25')->select();
        $this->assign('list',$data);
        import('ORG.Util.Page');
        $count=$type->count();
        $page=new Page($count,25);
        $show=$page->show();
		
		//dump($data);
		$this->assign('page',$show);
        
        
        $this->display();
	}
	
	function addTypedq(){
		$type=D('typedq');
		$type->create();
		
		if ($type->add()){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagedq'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagedq'));
		}		
		
	}
	
	function deltypedq(){
		$type=D('typedq');
		$where="id=".$_GET['id'];
		$res=$type->where($where)->delete();
		if($res){
			//$this->success('删除成功!',U('Laveltype/typemanage'));
            redirect(U('Laveltype/typemanagedq'));
		}else{
			$this->error('删除失败！',U('Laveltype/typemanagedq'));
		}
	}
	function addroottypedq(){
		$type=D('typedq');
		$data=array(
			'typename'=>$_POST['typename'],
			'pid'=>0,
			'path'=>0,
		);
		if ($type->add($data)){
            //$this->success('添加成功!',U('Laveltype/typemanage'),1);
            redirect(U('Laveltype/typemanagedq'));
		}else {
			$this->error('添加失败！',U('Laveltype/typemanagedq'));
		}		
	}
	
	function upnamedq(){
		$type=D('typedq');
		$where="id=".$_POST['id'];
		$data['typename']=$_POST['typename'];
		$res=$type->where($where)->save($data);  
		if ($res){
			//$this->success('添加成功!',U('Laveltype/typemanage'),1);
			redirect(U('Laveltype/typemanagedq'));
		}else {
			$this->error('修改失败！',U('Laveltype/typemanagedq'));
		}		
	}
	
	
	
	
	
	
}
