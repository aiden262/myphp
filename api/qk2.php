<?php
$id = isset($_GET['id'])?$_GET['id']:'swwhsh';
$n = [
    'swzh' => '5036227ccff34144ab5fcabf64e76b01', //汕尾综合
    'swwhsh' => 'a405211becdf4d33a1fa42b586b3b766', //汕尾文化生活
    ];
date_default_timezone_set("Asia/Shanghai");
$t = date("YmdHis");
$sign = md5('signabfoptatfepustcqasscppxcespqstdw585BAA4F7F00000133AE39FD12580541'.$t.'sign');
$post = 'timestamp='.$t.'&appid=abfoptatfepustcqasscppxcespqstdw&os=android&terminal=2&udid=585BAA4F7F00000133AE39FD12580541&sign='.$sign.'&programId='.$n[$id].'&programType=liveVideo';
$m = curl_init('https://api.qingk.cn/jkplatform/v1/mediaPlayer/getPlayerUrl');
curl_setopt($m, CURLOPT_POST, 1);
curl_setopt($m, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($m, CURLOPT_REFERER,'http://z.qingk.cn/');
curl_setopt($m, CURLOPT_POSTFIELDS, $post);
$d = curl_exec($m);
curl_close($m);
$playurl = json_decode($d)->results->body->SDUrl ;
header('location:'.$playurl);
//echo $playurl;
?>
