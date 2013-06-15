<?php if(!defined('IN_DISCUZ')) exit('Access Denied'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>1</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">

<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
<!--script src="js/less-1.3.3.min.js"></script-->
<!--append ‘#!watch’ to the browser URL, then refresh the page. -->

<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js" type="text/javascript"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/apple-touch-icon-144-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/apple-touch-icon-114-precomposed.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/apple-touch-icon-72-precomposed.png">
  <link rel="apple-touch-icon-precomposed" href="img/apple-touch-icon-57-precomposed.png">
  <link rel="shortcut icon" href="img/favicon.png">
  
<script src="js/jquery.min.js" type="text/javascript"></script>
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/scripts.js" type="text/javascript"></script>

<style type="text/css" media="screen">
    #news_s{border-top:1px dotted #e8e8e8}
#news_s>li{float:left;margin:10px;} 

#news3>li{height:170px;background-image: url('img/news3_bg.jpg');float:left;}
#news3>li>img{margin-top:22px;margin-bottom:22px;margin-left:14px;margin-right:34px;}
#news3>li>p{margin-left:14px;margin-right:34px;text-align:center}
</style>
</head>

<body>
<div class="container">
<div class="row">
<div class="span12" style="background-image: url('img/header_bg.jpg'); height:104px">
<img alt="140x140" src="img/logo_index.jpg" />
<p class="pull-right" style="line-height:104px;align:bottom;border:1px solid red">
欢迎您，username | 退出 萌元素积分：0.00（领取）
[萌元素游戏首页 - 萌元素游戏论坛 - 积分商城]
</p>
</div>
</div>

<!-- 通栏1 -->
<div class="row">
<div class="span12" style="background-image: url('img/news1.jpg');background-repeat: no-repeat; height:45px;margin-top:26px;margin-bottom:10px">
<p class="pull-right">
more
</p>
</div>
</div>
<div class="row">
<div class="span12" style="border:1px solid #e8e8e8;padding:10px;">
<!-- 大图 -->
<div style="float:left">
<img alt="190x260" src="img/test1.jpg" class="img-rounded" />
<p>
subject 1
</p>
</div>

<!-- 列表 -->
<div style="float:left;width:300px;">
<p style="float:left;width:300px;text-align:center"><strong>Lorem ipsum dolor sit amet</strong></p>
<ul class="unstyled">
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Lorem ipsum dolor sit amet
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Consectetur adipiscing elit
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Integer molestie lorem at massa
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Facilisis in pretium nisl aliquet
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Nulla volutpat aliquam velit
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Faucibus porta lacus fringilla vel
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Aenean sit amet erat nunc
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Eget porttitor lorem
</li>
</ul>
</div>

<!-- 大图 -->
<div style="float:left">
<img alt="190x260" src="img/test1.jpg" class="img-rounded" />
<p>
subject 1
</p>
</div>

<!-- 列表 -->
<div style="float:left;width:300px;">
<p style="float:left;width:300px;text-align:center"><strong>Lorem ipsum dolor sit amet</strong></p>
<ul class="unstyled">
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Lorem ipsum dolor sit amet
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Consectetur adipiscing elit
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Integer molestie lorem at massa
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Facilisis in pretium nisl aliquet
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Nulla volutpat aliquam velit
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Faucibus porta lacus fringilla vel
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Aenean sit amet erat nunc
</li>
<li>
<i class="icon-chevron-right" style="margin-left:10px;"></i>Eget porttitor lorem
</li>
</ul>
</div>

<!-- 清除浮动 -->
<div style="clear:both"></div>

<!-- 小图新闻 -->
<div style="width:1000px;">
<ul class="unstyled" id="news_s">
<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>

<li>
<div id="name" style="background-image: url('img/new1_bg.jpg');background-repeat: no-repeat;width:80px;height:80px;">
<img src="img/test2.jpg" style="margin:4px;"/>
</div>
<p>
subject 1
</p>
</li>
</ul>
</div>

</div>
</div>

<!-- ad2 -->
<div class="row">
<div class="span12" style="background-image: url('img/ad2.jpg');background-repeat: no-repeat; height:100px;margin-top:26px;margin-bottom:10px">
</div>
</div>


<!-- news2 -->
<div class="row">
<div class="span12" style="background-image: url('img/news2.jpg');background-repeat: no-repeat; height:43px;margin-top:26px;margin-bottom:10px">
<p class="pull-right">
more
</p>
</div>
</div>


<!-- ad3 -->
<div class="row">
<div class="span12" style="background-image: url('img/ad3.jpg');background-repeat: no-repeat; height:100px;margin-top:26px;margin-bottom:10px">
</div>
</div>

<!-- news3 -->
<div class="row">
<div class="span12" style="background-image: url('img/news3.jpg');background-repeat: no-repeat; height:45px;margin-top:26px;margin-bottom:10px">
<p class="pull-right">
more
</p>
</div>		
</div>

<div class="row">
<div class="span12">
<ul class="unstyled" id="news3">
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>

</ul>
</div>
</div>

<div class="row">
<div class="span12">
<ul class="unstyled" id="news3">
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>
<li>
<img border="0" src="img/test3.jpg" width="120" height="90" />
<p>aaaa</p>
</li>

</ul>
</div>
</div>

<!-- footer -->
<div class="row">
<div class="span12">
<p>关于我们|联系我们</p> 
<p>
copyright
</p>
</div>
</div>


</div>


</body>
</html>
