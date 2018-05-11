<?php
namespace Acme\Core;
use Illuminate\Database\Capsule\Manager as Capsule;


/**
 * 
 */
class DB extends Capsule
{
	//数据库链接 - |
	public $connectionDB = FALSE;
	//数据库连接信息
	public $configDB = FALSE;
}

$resDB = new DB;
if ($resDB->connectionDB === FALSE) {
	if ($resDB->configDB) {
		$config = $resDB->configDB;
	}else{
		$config = $resDB->configDB = include_once F_BASEDIR.'/config/database.php';
	}
	// var_dump($config);die;
	$resDB->addConnection($config);
	// 使用设置静态变量方法，令当前的 Capsule 实例全局可用
	$resDB->setAsGlobal();
	// 启动 Eloquent ORM
	$resDB->bootEloquent();
	$resDB->connectionDB = true;
}

/**
 * 数据库文件
 */
// class DB 
// {
// 	//数据库链接 - |
// 	public $connectionDB = FALSE;
// 	//数据库连接信息
// 	private $configDB = FALSE;
// 	/**
// 	 * 返回数据库连接详情
// 	 * @param array $config [数据库连接数组]
// 	 */
// 	function __construct($config=[]) {
// 		if ($this->connectionDB === FALSE) {
// 			$capsule = new Capsule;
// 			if ($config || $this->configDB) {
// 				$config = $config?$config:$this->configDB;
// 			}else{
// 				$config = $this->configDB = include_once F_BASEDIR.'/config/database.php';
// 			}

// 			$capsule->addConnection($config);
// 			// 使用设置静态变量方法，令当前的 Capsule 实例全局可用
// 			$capsule->setAsGlobal();
// 			// 启动 Eloquent ORM
// 			$capsule->bootEloquent();
// 			$this->connectionDB = &$capsule;
// 		}
// 		return $this->connectionDB;
// 	}

// 	function __destruct() {
// 	}

// }