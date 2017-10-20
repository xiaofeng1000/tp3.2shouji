<?php
namespace Home\Controller;
use Think\Controller;

class ShellController extends Controller{
	public function index(){
		$Model=M('screen');
		
		$pro=$Model->select();
		$arr=$Model->find();
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
		$Model_number=$_POST['Model_number'];
		$color=$_POST['color'];
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];
		$data=array("Model_number"=>$Model_number,"color"=>$color,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price);

		$Model=M('information');
		

		$obj=$Model->add($data);

		if($obj){
			echo "ok";
		}
	}
}