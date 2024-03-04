<?php
	date_default_timezone_set("Asia/Shanghai");
	$prog_id = $_GET['progid']; // 台号
	$app_id = $_GET['appid']; // 每个电视台对应的appid都不同.
	$times = date('YmdHis',time());
	$sign = md5('sign'.$app_id.'977668D37F0000013DB2602E88969923'.$times.'sign');
	$postdata = 'appid='.$app_id.'&v=1.0.0.0&os=android&terminal=2&channel=&udid=977668D37F0000013DB2602E88969923&timestamp='.$times.'&token=&sign='.$sign.'&page=&step=&programId='.$prog_id.'&programType=liveVideo';
	
	$bstrURL = 'https://api.qingk.cn/jkplatform/v1/mediaPlayer/getPlayerUrl';
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $bstrURL);
	curl_setopt($ch, CURLOPT_POST, TRUE);	 	 
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE); 
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
	curl_setopt($ch, CURLOPT_REFERER,'http://z.qingk.cn/');
	curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.92 Safari/537.36');
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
	$data = curl_exec($ch);
	curl_close($ch);
	$obj = json_decode($data);
	
	$url = $obj->results->body->SDUrl ;
	header('location:'.$url);


?>