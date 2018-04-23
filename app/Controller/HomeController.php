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

	public function hello(){
		echo "fromwork has cread! ^&^";
	}
}