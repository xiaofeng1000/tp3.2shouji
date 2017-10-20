<?php
namespace Home\Controller;
use Think\Controller;

class RamController extends Controller{
	public function index(){
		$Model=M('screen');
		$obj=$Model->select();
		$this->assign('obj',$obj);
		$this->display();
	}

	public function insert(){
		$model_number=$_POST['model_number'];
		$Damage_reason=$_POST['Damage_reason'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path=$_POST['path'];
		$Service=$_POST['Service'];
		$price=$_POST['price'];

		$data=array("Model_number"=>$model_number,"Damage_reason"=>$Damage_reason,"user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service,"total_cost"=>$price);

		$Mod=M('information');

		$pro=$Mod->add($data);

		if($pro){
			echo "ok";
		}

	}
}
