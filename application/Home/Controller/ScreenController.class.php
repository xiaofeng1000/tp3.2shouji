<?php
namespace Home\Controller;
use Think\Controller;

class ScreenController extends Controller{
	public function index(){
		$Model=M('screen');

		$obj=$Model->select();

		$this->assign('obj',$obj);
		$this->display();
	}
}