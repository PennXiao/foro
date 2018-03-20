<?php
return function(FastRoute\RouteCollector $r) {
	$r->addRoute('GET','/','HomeController@hello');
    $r->addRoute('GET','/index','HomeController@hello');
    // These two calls
    // $r->addRoute('GET', '/test', 'handler');
    // $r->addRoute('POST', '/test', 'handler');
    // Are equivalent to this one call
    // $r->addRoute(['GET', 'POST'], '/test', 'handler');
};