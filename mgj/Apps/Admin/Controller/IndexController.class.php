<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	// echo '我们网站的后台首页';

    	//解析模板
    	$this->display();
    }
}