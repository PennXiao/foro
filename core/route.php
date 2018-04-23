<?php


/**
 * 路由组
 * @var [type]
 */
$dispatcher = FastRoute\simpleDispatcher( function(FastRoute\RouteCollector $route) {
    // $r->addRoute('GET','/','handler');
    // $r->addRoute('GET','/index','handler');
    // These two calls
    // $r->addRoute('GET', '/test', 'handler');
    // $r->addRoute('POST', '/test', 'handler');
    // Are equivalent to this one call
    // $r->addRoute(['GET', 'POST'], '/test', 'handler');
    require_once F_BASEDIR.'/config/route.php';
});


// Fetch method and URI from somewhere
$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

// Strip query string (?foo=bar) and decode URI
if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);
$routeInfo = $dispatcher->dispatch($httpMethod, $uri);


switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        // ... 404 Not Found
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:
        $handler = $routeInfo[1];
        $vars = $routeInfo[2];
        // ... call $handler with $vars
    	$contfund = explode('@', $handler);

    	$classname = 'Acme\\Controller\\'.$contfund[0];
    	$actionname = empty($contfund[1])?"index":$contfund[1];
    	$class = new $classname;
    	call_user_func_array(array($class, $actionname),$vars);
        break;
}
