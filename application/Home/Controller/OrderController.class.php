<?php
namespace Home\Controller;
use Think\Controller;

class OrderController extends Controller{
	public function index(){
		$id=$_GET['id'];
		// dump($id);
		$Model=M('information');

		$pro=$Model->where("id=".$id)->find();
		// echo $Model->getLastSql();

		$this->assign('pro',$pro);
		$this->display();
	}
}