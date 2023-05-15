<?php
// 获取id参数
$id = isset($_GET['id']) ? $_GET['id'] : '';

// 拼接网址
$url = 'https://ap.jyrtv.tv/tvradio/Tvfront/getTvInfo?tv_id=' . $id;

// 读取网址返回的JSON
$json = file_get_contents($url);
$data = json_decode($json, true);

// 提取m3u8地址
$m3u8_url = $data['data']['m3u8'];

// 跳转到m3u8地址
header('Location: ' . $m3u8_url);
exit;
?>