<?php
//获取热门或者最新内容 /
$route->addRoute('GET','/','HomeController@index');
//热门分类
$route->addRoute('GET','/example/{dir}','HomeController@example');
//获取博客内容 /blong?t=Pv5I6ASbUaF
$route->addRoute('GET','/blong','HomeController@blong');

// Admin 文章新增编辑
$route->addRoute('GET','/edit','HomeController@blong');


