<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:90:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\index\index.html";i:1465376808;s:92:"D:\gaoqing\software\wamp\www\PHPStorm\tp5\public/../application/blog\view\layout\layout.html";i:1465357799;}*/ ?>
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
        <title>文章首页</title>
<link href="<?php echo DOMAIN; ?>/css/index.css" rel="stylesheet">

<div class="list">
    <div class="title">
        <h2>最新文章..</h2>
    </div>
    <ul>
        <?php if((isset($latestArticles) && !empty($latestArticles))): foreach($latestArticles as $latestArticle): ?>
                <li>
                    <div class="post-image">
                            <span>
                                <a href="<?php echo DOMAIN; ?>/article/<?php echo $latestArticle['aid']; ?>.html">
                                <img src="<?php echo DOMAIN; ?>/images/<?php echo $latestArticle['thumb']; ?>" width=""></a>
                            </span>
                    </div>
                    <div class="post-content">
                        <a href="<?php echo DOMAIN; ?>/article/<?php echo $latestArticle['aid']; ?>.html">
                            <h3><?php echo $latestArticle['title']; ?></h3></a>
                        <p><?php echo $latestArticle['info']; ?></p>
                    </div>
                </li>
            <?php endforeach; endif; ?>
    </ul>
</div>

<div class="list">
    <div class="title">
        <h2>热门文章..</h2>
    </div>
    <ul>
        <?php if((isset($hotArticles) && !empty($hotArticles))): foreach($hotArticles as $hotArticle): ?>
        <li>
            <div class="post-image">
                <span>
                    <a href="<?php echo DOMAIN; ?>/article/<?php echo $hotArticle['aid']; ?>.html">
                    <img src="<?php echo DOMAIN; ?>/images/<?php echo $hotArticle['thumb']; ?>" width=""></a>
                </span>
            </div>
            <div class="post-content">
                <a href="<?php echo DOMAIN; ?>/article/<?php echo $hotArticle['aid']; ?>.html">
                    <h3><?php echo $hotArticle['title']; ?></h3></a>
                <p><?php echo $hotArticle['info']; ?></p>
            </div>
        </li>
        <?php endforeach; endif; ?>
    </ul>
</div>
    </div>

    <!-- 主体内容部分 End -->

    <!-- 右侧文章列表 Start -->
    <div class="sidebar">
        <div class="item">
            <h2>文章标题</h2>
            <ul class="flink">
                <li><a href="http://yii2test.adv.com/article/42.html">20151228测试2</a></li>
                <li><a href="http://yii2test.adv.com/article/41.html">20151228测试</a></li>
                <li><a href="http://yii2test.adv.com/article/28.html">蹲下来抱抱自己</a></li>
                <li><a href="http://yii2test.adv.com/article/40.html">后盾网激情澎湃的篮球赛</a></li>
                <li><a href="http://yii2test.adv.com/article/38.html">惜别，亲爱的友情</a></li>
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