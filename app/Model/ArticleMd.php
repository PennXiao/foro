<?php

namespace Acme\Model;
/**
* 顶部菜单栏
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

	private $COLUMNS  = [
		'id',
		'markdown',
		'short_url',
		'show_count',
		'created_at',
		'updated_at',
		'deleted_at',
	];
}