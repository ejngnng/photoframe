<?php
/**
 * InitPHP开源框架 - DEM
 * @author zhuli
 */
define(PHOTO,"/photoframe/sweat/www/photo");
class indexController extends Controller {

	public $initphp_list = array('test'); //Action白名单
	
	public function run() {
		
	 	$this->view->display("index/index");
	}
	public function test(){
		echo "action ++++ test";
	}
}