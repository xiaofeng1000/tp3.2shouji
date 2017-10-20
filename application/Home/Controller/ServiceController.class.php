<?php
namespace Home\Controller;
use Think\Controller;

class ServiceController extends Controller{
	public function index(){
		$this->display();
	}

	public function update(){

		$id=$_POST['id'];
		$user=$_POST['user'];
		$Contact=$_POST['Contact'];
		$path1=$_POST['path1'];
		$path2=$_POST['path2'];
		$Service=$_POST['Service'];
		$path=$path1."".$path2;
		$Model=M('information');
		$data=array("user"=>$user,"Contact"=>$Contact,"path"=>$path,"Service"=>$Service);
		$pro=$Model->where("id=".$id)->save($data);
		if($pro){
			echo $id;
		}
	}
}