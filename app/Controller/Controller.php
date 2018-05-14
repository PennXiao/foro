<?php
namespace Acme\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;

class Controller{
	protected $view = '';
	protected $db = NULL;
	private $request = '';
	function __construct() {
		if (!$this->db) {
			$this->db();# code...
		}
	}

	public function db($config = NULL){
		if ($this->db && $config == NULL) {
			return $this->db;
		}else{
			$capsule = new Capsule;
			$config = $config?$config:\App::DBconfig('db');
			$capsule->addConnection($config);
			// 使用设置静态变量方法，令当前的 Capsule 实例全局可用
			$capsule->setAsGlobal();
			// 启动 Eloquent ORM
			$capsule->bootEloquent();
			$this->db = &$capsule;
		}
	}
	
	public function request($key=NULL){
		return $key!=null?(!isset($_GET[$key])?!isset($_POST[$key])?NULL:$_POST[$key]:$_GET[$key]):$_GET+$_POST;
	}

	public function view($file='',$arr=[],$option=[]){
		$loader = new \Twig_Loader_Filesystem(F_BASEDIR.'/resources/view');
		if (\App::config('debug') != true) {
			$option = ['cache' => F_BASEDIR.'/temp/template/compilation_cache',];
		}

		//此处获取菜单栏
		$example = $this->db::table('sort')->get();
		$arr['example'] = $example;
		// $twig->addGlobal('text', new Text());全局变量
		$twig = new \Twig_Environment($loader,$option);
		echo $twig->render($file,$arr);
	}

	function __destruct() {
	}



}