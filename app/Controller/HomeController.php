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

	public function example($dir)
	{
		$this->db();
		$res = $this->db::table('content')->get($id);
		$this->view('content.html',['data' => $res]);
	}

	public function blong($t)
	{
		$this->db();
		$res = $this->db::table('content')->get($id);
		$this->view('content.html',['data' => $res]);
	}

	public function edit($t)
	{
		$this->db();
		$res = $this->db::table('content')->get($id);
		$this->view('content.html',['data' => $res]);
	}


}