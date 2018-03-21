<?php
/**
 *开始项目
 * 监控项目运行耗费的资源
 * Init start memory    
 */
define("F_S_MEMORY",    memory_get_usage());
/**
 * 监控项目运行时长
 * Init start time
 */
define("F_S_TIME",      microtime(true));
/**
 * 定义项目的根目录
 * Define base dir
 */
define("F_BASEDIR",     realpath('../'));
/**
 * 定义项目是否是生产模式
 * --开启调试 develop
 * --开启生产 production
 */
// define("F_ERROR", 'develop');
//  // 关闭错误报告 -

                
$app = require F_BASEDIR.'/core/autoload.php';
//加载配置

$app->run();



?>
<script type="text/javascript">
    console.log('%c----------Debug-start----------\n--This Load had spend memory:<?=memory_get_usage() - F_S_MEMORY?> (byte).\n--This Load had spend microtime:<?=microtime(true) - F_S_TIME?> (s).\n----------Debug---end-------------','color:red');
</script>