<?php 
	$arr = [
		[
			"title"=>"李现为杨紫庆生",
			"num"=>101,
			"url"=>"http://www.baidu.com"
		],
		[
			"title"=>"滴滴顺风车重新上线",
			"num"=>145,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"何君尧遇袭受伤",
			"num"=>234,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"人民币汇率重回7",
			"num"=>156,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"如果我在日本永远上不了地铁",
			"num"=>89,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"孙宇晨称考虑帮王思聪还债",
			"num"=>99,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"韦德致敬霍华德",
			"num"=>101,
			"url"=>"http://www.baidu.com"
		]
		,
		[
			"title"=>"吴亦凡新歌微电影",
			"num"=>210,
			"url"=>"http://www.baidu.com"
		]

	];

	
	//随机排序数组 
	shuffle($arr); 
	
	echo json_encode($arr);
	

















 ?>