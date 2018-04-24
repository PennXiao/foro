<?php
class App{
	/**
	 * 加载配置
	 * @param  [str] $key [获取配置数组$key的值]
	 * @return [arr]      [返回加载的配置内容]
	 */
	public static function config($key = null){
		require F_BASEDIR.'/config/app.php';
		return $key!=null?(isset($config[$key])?$config[$key]:null):$config;
	}
	/**
	 * 加载路由
	 * @param  [object] $request [过滤后的request object]
	 * @return [int]  0
	 */
	public function run($request = null){
		require_once F_BASEDIR.'/core/route.php';
		return 0;
	}

}