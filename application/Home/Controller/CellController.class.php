<?php
namespace Home\Controller;
use Think\Controller;

class CellController extends Controller{
	public function index(){
		$Model=M('battery');

		$pro=$Model->select();

		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$model_number=$_POST['model_number'];
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path1'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];

		$Model=M('information');

		$data=array("Model_number"=>$model_number,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price);

		$obj=$Model->add($data);

		if($obj){
			echo "ok";
		}
	}
}