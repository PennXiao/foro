<?php
namespace Acme\Controller;

class HomeController extends Controller{

	public function index(){
		// 获取热门前十的文章
		$res = $this->db::table('content')->get();
		$this->view('index',['data'=>$res->toarray()]);
	}

	public function example($dir)
	{
		$res = $this->db::table('content')->get($id);
		$this->view('content',['data' => $res]);
	}

	public function blong($t)
	{
		$res = $this->db::table('content')->get($id);
		$this->view('content',['data' => $res]);
	}

	public function edit($t='')
	{
		$res = [];


		$this->view('admin/edit',['data' => $res]);
	}


}