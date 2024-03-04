<?php
$id = isset($_GET['id'])?$_GET['id']:'yyzh';
$ids = array(
'cec1' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,c589df4aa43444ad9b52b4211e0b7732', //中国国际教育1
'cec2' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,6ca13879687b4d9d91730e83d1c4ad84', //中国国际教育2
'cec3' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,0ae423b72af04aaf8826d9b954e17a0f', //中国国际教育3
'cec4' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,7951a5a7ff1f42f4b1b81378b2a9fbe3', //中国国际教育4
'yyzh' => 'tcdsvpqpeowdscafxfsrpuspdqoauwvb,54b973aa8b5e4f0b8b9ac286f23b24f9', //云阳综合 重庆
'yywl' => 'tcdsvpqpeowdscafxfsrpuspdqoauwvb,e3e376b5dda84c23ae0b88623289a2ec', //云阳文化·旅游
'ykxwzh' => 'frxooxppxwdpseraaoqssudwvxrscrff,a53439dc46864e7593a4f29d068677d3', //营口新闻综合 辽宁
'ykgg' => 'frxooxppxwdpseraaoqssudwvxrscrff,1977ce7242fd40fd914e586bd26336d6', //营口公共
'ykys' => 'frxooxppxwdpseraaoqssudwvxrscrff,3c09b8027a1d4b20a7b5471c4b42e19d', //营口影视
'tlxwzh' => 'aopxefocupsosrtdxawoerrpqovabxqu,b4e0686d61514b40a9b7da295d52253c', //通辽新闻综合 内蒙古
'tlmyzh' => 'aopxefocupsosrtdxawoerrpqovabxqu,bb4c4921c4fd46feadc9e4e0c51ee344', //通辽蒙语综合
'tlcsfw' => 'aopxefocupsosrtdxawoerrpqovabxqu,7288eada348742a68e96c39973d573d0', //通辽城市服务
'xaxwzh' => 'otboetuwwvaassebawopvtdctctpaawb,08cf61e8548e4ea0838769ed59abff7b', //兴安新闻综合 内蒙古
'xawhly' => 'otboetuwwvaassebawopvtdctctpaawb,2c233d64a67744a1b2a0b7927ba03d06', //兴安文化旅游
'xaysyl' => 'otboetuwwvaassebawopvtdctctpaawb,651478e90f7c43ba98faf340e9f772a8', //兴安影视娱乐
'nmws' => 'otboetuwwvaassebawopvtdctctpaawb,f7eb4704d24e4c6d9fc1a7976b42137f', //内蒙古卫视
'bttv' => 'upxdcobxbdfpsxvcavbwdsvduceppcvf,fb3c89c8f71c43f4adc354417c3b4905', //宝塔电视台 陕西
'ljgw' => 'upxdcobxbdfpsxvcavbwdsvduceppcvf,e3ea51e6950346b4b4dce58dcfd7a3ed', //乐家购物 陕西
'zatv' => 'qftvqpbsedessquowaadwpexqupxuwrd,cad887a9e2ad4652a1a29290ff559862', //镇安TV 陕西
'bjtv1' => 'ftsebacfvuwpsasvbsrqtfwcffqdwbrb,61d4eef668864ef6812834b2c41c6478', //宝鸡一套 陕西
'bjtv2' => 'ftsebacfvuwpsasvbsrqtfwcffqdwbrb,a5e9e7bf8ed24a7aba90fba4bd0a8d3e', //宝鸡二套
'lqxw' => 'erexspwcaccwsfwuxsdwdoxbprusxouo,5a9e4e8e1c124ce183991fa874b3d087', //礼泉新闻 陕西
'lqsh' => 'erexspwcaccwsfwuxsdwdoxbprusxouo,6bed1e06be2845c692d16331f415d036', //礼泉生活
'lqgx' => 'erexspwcaccwsfwuxsdwdoxbprusxouo,f6d7014b13e54e6eae57eb4b1067127e', //礼泉果乡
'tcxwzh' => 'fwafobutpvcfsofwxebetaqtwbfoepcw,afa3e3ff50844db9969adf49910cc75b', //铜川新闻综合 陕西
'tcwhyl' => 'fwafobutpvcfsofwxebetaqtwbfoepcw,f10bc825b0864204846239d2cd2561e0', //铜川文化娱乐
'hanyzh' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,e0ff51b64cd94d979d2d50ca1c23e777', //汉阴电视台 陕西
'shxwzh' => 'bavfvvxcpupxstcvxsverpoqeaaweedu,a2086d84896d4bfe81bc9b8b938cf21f', //三河新闻综合 河北
'shyjsh' => 'bavfvvxcpupxstcvxsverpoqeaaweedu,0ce116c6da754656a5ec9000d366b4b5', //三河燕郊生活
'clzh' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,978ca641681d41d2b848ee1bd444ed6f', //昌黎综合 河北
'gctv1' => 'buqvurqbpaddsestbsucrtfbbeqaebsf,59b1be290df8430fbe915de036431c35', //故城TV-1 河北
'gctv2' => 'buqvurqbpaddsestbsucrtfbbeqaebsf,e15e4ea192a442c0875e85ef58c96c2d', //故城TV-2
'fyzh' => 'txterexdetqrsescxuqcdoaffadtptqw,d0bd0760ed1a4bcda66f438797975627', //汾阳综合 山西
'qxxwzh' => 'wuexacvcaqsessrfwppprwffetxrrfed,dcd64b88bf6f4af4a35530555b847e07', //沁县新闻综合 山西
'sgxw' => 'tvsqtecrddefsfaxbapvdcwqbvpbtofb,bf6aaeda966a4ffd8b6048b233ea5c12', //寿光新闻 山东
'sgsc' => 'tvsqtecrddefsfaxbapvdcwqbvpbtofb,752c34052a2d4a1d8bcc323adfc6d0dd', //寿光蔬菜
'tazh' => 'qucpuxwfqcxusxawbtotufcwdbxurfap,34d6a9cff416421ca9fe94c2c042058b', //泰安综合 山东
'tagg' => 'qucpuxwfqcxusxawbtotufcwdbxurfap,ca36fee61bb940cf88cc0e7f091bc48c', //泰安公共
'takj' => 'qucpuxwfqcxusxawbtotufcwdbxurfap,d4be310d103743c2882642e9ecf48be8', //泰安科教
'zctv1' => 'txoofassreoasdvwboaurdwrccqqetap,3ae633cdc19c4bdd8f642bad8eba4d7c', //周村一套* 山东
'zctv2' => 'txoofassreoasdvwboaurdwrccqqetap,b56b932d2ef04c629504ac80c6cdee00', //周村二套*
'zcxw' => 'csaoddxtweexsdabarxfedusdsdftquc,38305b729b584783829e519a28b6230f', //淄川新闻* 山东
'zcsh' => 'csaoddxtweexsdabarxfedusdsdftquc,9b3cc1e0975a49fbaa1f65c0a71d9f3a', //淄川生活*
'wwxwzh' => 'xpsstevprrpvsooxwrfpqbtsofxexxxt,3c1041a13dae47fc835ddbb5435e6957', //无为新闻综合 安徽
'sxxwzh' => 'oecwrpxbtsrwsfaabubaqepbvwtxrrcc,b0738210a9804cf3b56b7cd71bacefc0', //寿县新闻综合 安徽　
'yxzh' => 'tbexbtarowftsovfwubfaovwupbqorfc,28bed66f4f9f43849dca4faac143088a', //攸县电视台 湖南
'swzh' => 'abfoptatfepustcqasscppxcespqstdw,5036227ccff34144ab5fcabf64e76b01', //汕尾综合
'swgg' => 'abfoptatfepustcqasscppxcespqstdw,a405211becdf4d33a1fa42b586b3b766', //汕尾公共
'nnxwzh' => 'bxrtvottsxcbsfwfwcspftcooboxauqp,a0004c0a77eb46deac0099fe621d3a05', //南宁新闻综合 广西
'nndssh' => 'bxrtvottsxcbsfwfwcspftcooboxauqp,e0290ef0d35f453388c9342fd2ec6430', //南宁都市生活
'nnysyl' => 'bxrtvottsxcbsfwfwcspftcooboxauqp,f157349d126847d38ef8a257f59c9549', //南宁影视娱乐
'nngg' => 'bxrtvottsxcbsfwfwcspftcooboxauqp,bdfc214b3aff48b288b504a06bbab678', //南宁公共
'bszh' => 'afxdfauvqqaxsppawwwutbfaufcbxbcv,acf2f96ab0c04d058964deea70349131', //百色综合 广西
'bsgg' => 'afxdfauvqqaxsppawwwutbfaufcbxbcv,571ee81f938e4b14a2e8d0401c8732fa', //百色公共 广西
'ggxwzh' => 'wuawtopbuaoostdpxwttxpdqawqqtbts,2a967944b6044b82b54e09e401f83842', //贵港新闻综合 广西
'gggg' => 'wuawtopbuaoostdpxwttxpdqawqqtbts,5f0da857c243451fb7ab65f5794a62e7', //贵港公共
'ylxwzh' => 'pdrttpsppesoswpfwoedvvfdquxuvasr,482a6d3bc92548268b3494fb92ec3182', //仪陇新闻综合 四川
'sfxwzh' => 'swaofvcwrtrpsxcsxessuteufxfbtfap,1bd7e54d26814488a712a0308f49ff71', //什邡新闻
'hjxwzh' => 'redrsfeoowcpsfabwtobdecouoascwpx,216c7d55a07247549bd4e8ec616e994e', //合江新闻综合 四川
'nxxwzh' => 'fbortdcpobebscoraaedwbstvpccqqfb,2600f723b8a549bcb99e445f72863a3d', //纳溪新闻综合 四川
'qtzh' => 'xwoctcwsxsqbsrpfadxvretxdvxrdetr,0fde9b839bb64f45b10b8f60b7896838', //奇台综合
);
$str = preg_split("/[\s,]/","$ids[$id]");//分割数组参数。
$a = $str[0]; // 电视台appid
$p = $str[1]; // 频道id
$u = 'FB41F7EB7F000001574CE76DDB81FF49'; // udid固定值
date_default_timezone_set("Asia/Shanghai");//默认时区(亚洲上海)
$t = date("YmdHis");
$sign = md5('sign'.$a.$u.$t.'sign');
$postdata = 'timestamp='.$t.'&appid='.$a.'&os=android&terminal=2&udid='.$u.'&sign='.$sign.'&programId='.$p.'&programType=liveVideo';
$url = 'https://api.qingk.cn/jkplatform/v1/mediaPlayer/getPlayerUrl';
$m = curl_init();//初始化一个新的会话，返回一个cURL句柄，供设置函数curl_setopt(), 执行函数curl_exec()和关闭会话函数curl_close() 使用
curl_setopt($m, CURLOPT_URL, $url);//设置取回页面信息的URL地址
curl_setopt($m, CURLOPT_POST, 1);//设置获取数据的方法为post，真
curl_setopt($m, CURLOPT_RETURNTRANSFER, 1);//1 设置获取的信息不是直接输出;0 直接输出
curl_setopt($m, CURLOPT_REFERER,'http://z.qingk.cn/');//设置一个伪造来源
curl_setopt($m, CURLOPT_POSTFIELDS, $postdata);//URL的数据参数
$data = curl_exec($m);//执行给定的会话
curl_close($m);//关闭会话(不要这一行也可，但耗内存）
$obj = json_decode($data);//获取json数据
$playurl = $obj->results->body->SDUrl ;//获取数据的某值,这里是播放线路SDUrl的值。
header('location:'.$playurl);//将获得的某值输出到浏览器地址栏。
//echo $playurl;//将获得的某值输出到页面。
?>
