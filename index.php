<?php

$menu_list = [
	[
		"name" => "控制台",
		"icon" => "layui-icon layui-icon-home",
		"badge" => "12",
		"childs" => [
			[
				"name" => "主页",
				"icon" => "layui-icon layui-icon-home",
				"badge" => "12",
			],
			[
				"name" => "组件",
				"icon" => "icon",
				"badge" => "12",
			],
		],
	],
	[
		"name" => "控制台1",
		"icon" => "layui-icon layui-icon-home",
		"badge" => "12",
		"childs" => [
			[
				"name" => "主页1",
				"icon" => "layui-icon layui-icon-home",
				"badge" => "12",
			],
			[
				"name" => "组件1",
				"icon" => "icon",
				"badge" => "12",
			],
		],
	],
];

echo json_encode(["menu_list" => $menu_list, "type" => "1"], JSON_FORCE_OBJECT);