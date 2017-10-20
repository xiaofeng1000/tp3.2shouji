<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$id=$_GET['id'];
    	// 实例化表
    	$pro=M("shouji");
    	$Model=M("Model_number");

    	if($id!=0){
    		$brands=$pro->where("id=".$id)->select();
    		$br=$brands[0]['brands'];
    		$arr1=$Model->where("brands="."'$br'")->limit(0,8)->select();
    		// echo $Model->getLastSql();
    	}else{
    		$arr1=$Model->where()->limit(0,8)->select();
    	}
    	// 遍历表
    	$arr=$pro->select();
    	
    	// dump($brands) ;
    	// exit;
    	

    	// echo $pro->getLastSql();
    	// exit;
    	$this->assign('arr1',$arr1);
    	$this->assign('arr',$arr);
        $this->show();
    }
}