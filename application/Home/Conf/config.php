<?php
return array(
	/* 数据库设置 */
	'DB_TYPE'               =>  'mysqli',     // 数据库类型
	'DB_HOST'               =>  'localhost', // 服务器地址
	'DB_NAME'               =>  'sj',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '',          // 密码
	'DB_PORT'               =>  '',        // 端口
	'DB_PREFIX'             =>  '',    // 数据库表前缀
	'DB_FIELDTYPE_CHECK'    =>  false,       // 是否进行字段类型检查
	'DB_FIELDS_CACHE'       =>  false,        // 启用字段缓存
	
	//success系统提示信息页面
	'TMPL_ACTION_ERROR'     =>  'Public:success', // 默认错误跳转对应的模板文件
	'TMPL_ACTION_SUCCESS'   =>  'Public:success', // 默认成功跳转对应的模板文件
);












