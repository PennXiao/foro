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

	private $COLUMNS  = [
		'id',
		'name',
		'order',
		'created_at',
		'updated_at',
		'deleted_at',
	];
	
	
}



