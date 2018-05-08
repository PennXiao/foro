<?php
namespace Acme\Controller;

/**
* 
*/

class HomeController extends Controller{
	public function index(){
		// 获取热门前十的文章
		$res = $this->db::table('content')->all();
		$this->view('index.html',['data'=>$res]);
	}

	public function content($cid){
		//
		$res = $this->db::table('article')->find('cid','=',$cid);
		$this->view('content.html'.['data'=>$res]);
	}
}