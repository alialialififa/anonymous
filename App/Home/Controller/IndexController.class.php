<?php
namespace Home\Controller;
use Think\Controller;
/**
 * 2017-11-28
 * author:dilu
 */
class IndexController extends CommonController {
    public function index(){
       redirect("/t");
    }
    public function _empty(){
		redirect("/404.html");
	}
	public function test(){
		$this->error("fraed");
	}
}