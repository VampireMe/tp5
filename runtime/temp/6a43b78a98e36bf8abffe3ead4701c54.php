<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:96:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\category\category.html";i:1465721482;s:92:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\layout\layout.html";i:1465715940;}*/ ?>
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
        
<title><?php echo $title; ?></title>
<link href="<?php echo DOMAIN; ?>/css/category.css" rel="stylesheet">

<div class="news">
    <?php if(isset($articles)): if(!(empty($articles) || ($articles instanceof \think\Collection && $articles->isEmpty()))): foreach($articles as $article): ?>
                <div class="newsList">
                    <div class="newsImage">
                        <a href="<?php echo DOMAIN; ?>/article/<?php echo $article['aid']; ?>.html">
                            <img src="<?php echo DOMAIN; ?>/images/<?php echo $article['thumb']; ?>" width="">
                        </a>
                    </div>
                    <div class="newsContent">
                        <h3>
                            <a href="<?php echo DOMAIN; ?>/article/<?php echo $article['aid']; ?>.html"><?php echo $article['title']; ?></a>
                        </h3>
                        <p><?php echo $article['info']; ?></p>
                        <a href="<?php echo DOMAIN; ?>/article/<?php echo $article['aid']; ?>.html" class="more">更多&gt;&gt;</a>
                    </div>
                </div>
            <?php endforeach; endif; endif; ?>
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