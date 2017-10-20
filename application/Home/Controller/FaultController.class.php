<?php 
namespace Home\Controller;
use Think\Controller;

class FaultController extends Controller{
	public function index(){

		$bid=$_GET['id'];

		$Model=M('Model_number');
		$Model2=M('classification');

		$pro=$Model->where("bid=".$bid)->find();
		$arr1=$Model2->select();
		// echo $Model->getLastSql();
		// dump($pro['path']);
		// dump($arr1);
		// exit;
		$this->assign('arr1',$arr1);
		$this->assign('pro',$pro);
		$this->display();
	}

	public function insert(){
		$id=$_POST['id'];
		$color=$_POST['color'];
		$Damage_reason=$_POST['Damage_reason'];
		$total_cost=$_POST['total_cost'];
		$Model=M('information');
		$Model1=M('Model_number');

		$arr=$Model1->where("bid=".$id)->find();
		$data=array("image"=>$arr['path'],"Model_number"=>$arr['Model_number'],"color"=>$color,"Damage_reason"=>
			$Damage_reason,"total_cost"=>$total_cost);

		$pro=$Model->add($data);
		
		if($pro){
			echo $pro;
		};
	}

}