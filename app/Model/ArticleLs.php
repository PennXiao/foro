<?php

namespace Acme\Model;
/**
* 顶部菜单栏
*/
class MenuTop extends Model
{
	protected $table = 'article_list';

	//关闭orm自动维护时间戳
	// public $timestamps = false;
	
	//批量赋值
	protected $fillable = [];
	//批量赋值黑名单
	protected $guarded = [];

	private $COLUMNS  = [
		'id',
		'title',
		'textarea',
		'mark_group',
		'created_at',
		'updated_at',
		'deleted_at',
	];
}