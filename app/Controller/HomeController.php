<?php
namespace Acme\Controller;

/**
* 
*/

class HomeController extends Controller{
	public function index(){
		// 获取热门前十的文章
		$this->db();
		$res = $this->db::table('content')->get();
	
		$this->view('index.html',['data'=>$res->toarray()]);
	}

}