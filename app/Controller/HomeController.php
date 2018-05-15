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
	/**
	 * 保存新增的文章
	 */
	public function editPost(){
		$data = [];
		$data['title'] = $this->request('title');
		// $data['info'] = $this->request('info');
		$data['md_text'] = $this->request('content');
		$data['sort'] = $this->request('sort');
		$data['short_url'] = 'VYEdit';
		$id = $this->db::table('content')->insertGetId($data);
		$this->db::table('content')
            ->where('id', $id)
            ->update(['short_url' => shortUrl($id)]);
        header("location:/");
	}


}