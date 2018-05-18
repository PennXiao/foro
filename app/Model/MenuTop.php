<?php

namespace Acme\Model;
/**
* 顶部菜单栏
*/
class MenuTop extends Model
{
	//表明
	protected $table = 'menu_top';
	
	//关闭orm自动维护时间戳
	// public $timestamps = false;
	
	//批量赋值
	protected $fillable = [];
	//批量赋值黑名单
	protected $guarded = [];

private $COLUMNS  = <<<END
CREATE TABLE IF NOT EXISTS `pennfly`.`menu_top` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NOT NULL COMMENT '名称',
  `url` VARCHAR(45) NOT NULL COMMENT '链接',
  `order` TINYINT NOT NULL DEFAULT 0 COMMENT '排序',
  `updated_at` TIMESTAMP NULL,
  `created_at` TIMESTAMP NULL,
  `deleted_at` TINYINT NULL,
  PRIMARY KEY (`id`))
  ENGINE = InnoDB default charset=utf8;;
END;
}



