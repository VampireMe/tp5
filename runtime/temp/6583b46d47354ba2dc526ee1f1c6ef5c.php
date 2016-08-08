<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:94:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\article\article.html";i:1466151672;s:92:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\layout\layout.html";i:1465715940;}*/ ?>
<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="<?php echo DOMAIN; ?>/css/common.css" rel="stylesheet">
</head>

<!--[CDATA[YII-BLOCK-BODY-BEGIN]]--><body>
<div id="top"></div>
<div id="header">
    <div class="logo">
        <a href="<?php echo DOMAIN; ?>">
            <img src="<?php echo DOMAIN; ?>/images/logo.jpg" alt="">
        </a>
    </div>
    <div class="navigation">
        <a href="<?php echo DOMAIN; ?>">首页</a>

        <!-- 分类信息 Start -->
        <?php foreach($categories as $category): ?>
            <a href="<?php echo DOMAIN; ?>/category/<?php echo $category['cid']; ?>.html"><?php echo $category['cname']; ?></a>
        <?php endforeach; ?>
        <!-- 分类信息 End -->
    </div>
</div>

<div id="main">

    <div class="content">
        
<link href="<?php echo DOMAIN; ?>/css/details.css" rel="stylesheet">
<title><?php echo $article['title']; ?></title>

<div class="details">
    <h1><?php echo $article['title']; ?></h1>
    <div class="info">
        <div class="base">
            <em>发表于 <?php echo date('Y-m-d H:i', $article['time']); ?></em>, 分类：<strong><?php echo $category['cname']; ?></strong>
        </div>
    </div>
    <div class="content"><?php echo $article['content']; ?></div>
</div>
    </div>

    <!-- 主体内容部分 End -->

    <!-- 右侧文章列表 Start -->
    <div class="sidebar">
        <div class="item">
            <h2>文章标题</h2>
            <ul class="flink">
                <?php foreach($latest5 as $article): ?>
                <li>
                    <a href="<?php echo DOMAIN; ?>/article/<?php echo $article['aid']; ?>.html"><?php echo $article['title']; ?></a>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <!-- 右侧文章列表 End -->

</div>

<div id="footer">
    <div class="bgbar"></div>
    <div class="bottom">
        <div class="pos">
            <div class="copyright">© Copyright 2011-2013 www.houdunwang 后盾网</div>
        </div>
    </div>
</div>

</body>
</html>