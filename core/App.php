<?php
class App{


	public static function config($key = null){
		require_once F_BASEDIR.'/config/app.php';
		// var_dump($config);
		return $key!=null?(isset($config[$key])?$config[$key]:null):$config;
	}
	/**
	 * 加载视图定义到类
	 * @param  [object] $request [过滤后的request object]
	 * @return [int]  0
	 */
	public function run($request = null){
		require_once F_BASEDIR.'/core/route.php';
		return 0;
	}

}