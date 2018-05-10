<?php

/**
 * 行为拓展
 * @var [type]
 */
$loader = require F_BASEDIR.'/vendor/autoload.php';
//新增psr4目录组
$loader->addPsr4('Acme\\', F_BASEDIR.'/app/');
$loader->addClassMap(['App' => F_BASEDIR.'/core/App.php']);

// 影响PHP报错行为
if (App::config('debug') == true) {
	$whoops = new \Whoops\Run;
	$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
	$whoops->register();
}

// 加载方法 - 加载安全过滤
return new App();