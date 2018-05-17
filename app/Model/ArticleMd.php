<?php
namespace Acme\Model;
use Acme\Model\ArticleLs;
/**
* 文章Markdown 源码内容
*/
class ArticleMd extends Model
{
	protected $table = 'article_markdown';

	//关闭orm自动维护时间戳
	// public $timestamps = false;
	
	//批量赋值
	protected $fillable = [];
	//批量赋值黑名单
	protected $guarded = [];

	/**
	 * 发表文章
	 * @param  array  $data insert原数据
	 * @return [type]       [description]
	 */
	public static function inCreate($data=[]){
		$shortUrl = ArticleLs::inCreate($data);
		$mk['short_url']	= $shortUrl;
		$mk['md_doc']		= $data['markdown_doc'];
		$mk['md_htm']		= $data['markdown_htm'];
		return self::create($mk);
	}



private $COLUMNS  = <<<END
CREATE TABLE IF NOT EXISTS `pennfly`.`article_markdown` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `md_doc` TEXT NULL COMMENT 'md源码',
  `md_htm` TEXT NULL COMMENT 'hm源码',
  `short_url` VARCHAR(11) NOT NULL COMMENT 'url',
  `show_count` INT NOT NULL DEFAULT 1 COMMENT '热度',
  `created_at` TIMESTAMP NULL,
  `updated_at` TIMESTAMP NULL,
  `deleted_at` TINYINT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB DEFAULT CHARSET=utf8;
END;
}