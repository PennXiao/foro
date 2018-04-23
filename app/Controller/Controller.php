<?php
namespace Acme\Controller;
use Illuminate\Database\Capsule\Manager as Capsule;

class Controller{
	private	$view = '';
	private $db = NULL;
	private $request = '';
	function __construct() {
	}

	public function db($config = NULL){
		if ($this->db && $config == NULL) {
			return $this->db;
		}else{
			$capsule = new Capsule;
			$config = $config?$config:\App::config('db');
			$capsule->addConnection($config);
			$this->db = &$capsule;
		}
	}
	public function request($key=NULL){
		return $key!=null?(!isset($_GET[$key])?!isset($_POST[$key])?NULL:$_POST[$key]:$_GET[$key]):$_GET+$_POST;
	}

	public function view($file='',$arr=[]){
		$loader = new \Twig_Loader_Filesystem(F_BASEDIR.'/resources/view');
		$twig = new \Twig_Environment($loader, array(
		    'cache' => F_BASEDIR.'/temp/template/compilation_cache',
		));
		echo $twig->render($file,$arr);
	}

	function __destruct() {
	}



}