<?php

/**
 * 路由组
 * @var [type]
 */
$dispatcher = FastRoute\simpleDispatcher( function(FastRoute\RouteCollector $route) {
    //此处开始路由问题
    require_once F_BASEDIR.'/config/route.php';
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];

        //此处开始调用controller
    	$contfund = explode('@', $handler);
    	$classname = 'Acme\\Controller\\'.$contfund[0];
    	$actionname = empty($contfund[1])?"index":$contfund[1];
    	$class = new $classname;
    	call_user_func_array(array($class, $actionname),$vars);
        break;
}
