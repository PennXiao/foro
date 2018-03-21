<?php
/**
 * 行为拓展
 * @var [type]
 */
$loader = require F_BASEDIR.'/vendor/autoload.php';
//新增psr4目录组
$loader->addPsr4('Acme\\', F_BASEDIR.'/app/');
$loader->addClassMap(['App' => F_BASEDIR.'/core/App.php']);
// 控制PHP报错信息
// error_reporting(0);
if (App::config('debug') == true) {
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
}
return new App();
