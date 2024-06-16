<?php
//id=35,汕尾新闻综合;id=36,汕尾文化生活.
$id = isset($_GET['id'])?$_GET['id']:'35';
$url = "https://swtvapp.swrtv.com/tvradio/Tvfront/getTvInfo?tv_id=$id";
// 使用 file_get_contents 获取 URL 内容
$jsonContent = file_get_contents($url);
// 将 JSON 内容解析为 PHP 数组
$data = json_decode($jsonContent, true);
$m3u8 =  $data['data']['m3u8'] ;
header('Location:'.$m3u8);
?>
