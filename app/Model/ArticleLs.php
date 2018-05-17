<?php

namespace Acme\Model;
/**
* 文章列表
*/
class ArticleLs extends Model
{
	protected $table = 'article_list';

	//关闭orm自动维护时间戳
	// public $timestamps = false;
	
	//批量赋值
	protected $fillable = [];
	//批量赋值黑名单
	protected $guarded = [];

	public static function inCreate($data = []){
		$ls['title']		=	$data['title'];
		$ls['textarea']		=	$data['textarea'];
		$ls['menutop_id']	=   $data['menutop_id'];
		$oneLs = self::create($ls);
		$url = shortUrl($oneLs->id);
		$oneLs->short_url = $url;
		$oneLs->save();
		return $url;
	}


private $COLUMNS  = <<<END
CREATE TABLE IF NOT EXISTS `pennfly`.`article_list` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(75)  NOT NULL COMMENT '文章标题',
  `textarea` VARCHAR(225)  NOT NULL COMMENT '文章简介',
  `mark_group` INT NULL COMMENT '标签组',
  `short_url` VARCHAR(11) NOT NULL COMMENT 'url',
  `menutop_id` INT NOT NULL DEFAULT 1 COMMENT '所属类目',
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;
END;
}
