<?php
namespace Home\Controller;
use Think\Controller;

class ShellController extends Controller{
	public function index(){
		$Model=M('screen');
		
		$pro=$Model->select();
		$arr=$Model->where()->find();
		$color=explode(",",$arr['color']);
		// echo $Model->getLastSql();
		// dump($color);

		$this->assign('color',$color);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function select(){
		$id=$_POST['id'];
		$Model=M('screen');

		$pro=$Model->where("sid=".$id)->find();
		// echo $Model->getLastSql();

		$color=explode(",",$pro['color']);
		$this->assign('color1',$color1);
		if($color){
			$color1=json_encode($color);
			// dump($color);
			echo $color1;
			// dump($color1);
		}
	}

	public function insert(){
		
	}
}