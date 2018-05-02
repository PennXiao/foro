<?php
namespace Acme\Controller;

/**
* 
*/

class HomeController extends Controller{
	public function index(){
		// $this->db();
		// $res = $this->db::table('users')->find(1);
		$this->view('index.html',['title'=>$res=222]);
	}

	public function content($cid){
		//
		$res = $this->db::table('article')->find('cid','=',$cid);
		$this->view('content.html'.['data'=>$res]);
	}
}