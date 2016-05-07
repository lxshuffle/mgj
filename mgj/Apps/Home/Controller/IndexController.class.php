<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
	// 前台首页
    public function index(){
    	//友情链接
    	$link=M('link');
        $links=$link->where(array('status'=>'已审核'))->select();
        //var_dump($res);die;
        //商品遍历
        $good=M('goods');
        $goods1=$good->limit(0,6)->order('id desc')->where(array('statu'=>'上架'))->select();
        $goods2=$good->limit(6,14)->order('id desc')->where(array('statu'=>'上架'))->select();
        $this->assign('links',$links);
        $this->assign('goods1',$goods1);
        $this->assign('goods2',$goods2);
        $this->assign('category',$category);
        $this->display();
    }
}