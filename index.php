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
				"childs" => [
					[
						"name" => "主页",
						"icon" => "layui-icon layui-icon-home",
						"href" => "/home/index/login",
						"id" => "1",
					],
					[
						"name" => "主页",
						"icon" => "layui-icon layui-icon-home",
						"badge" => "12",
						"href" => "/home/index/login1",
						"id" => "2",
					],

				],
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
				"name" => "主页12",
				"icon" => "layui-icon layui-icon-home",
				"badge" => "12",
				"childs" => [
					[
						"name" => "主页12",
						"icon" => "layui-icon layui-icon-home",
						"badge" => "12",
						"href" => "/home/index/login2",
					],
					[
						"name" => "主页12",
						"icon" => "layui-icon layui-icon-home",
						"badge" => "12",
						"href" => "/home/index/login3",
					],

				],
			],
			[
				"name" => "组件1",
				"icon" => "icon",
				"badge" => "12",
			],
		],
	],
];

echo json_encode(["list" => $menu_list, "type" => "1"], JSON_UNESCAPED_UNICODE);

?>




