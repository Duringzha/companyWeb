<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>琳峰泉-新闻动态</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" />
</head>
<body>
<div class="new-main">
    <div class="title">
        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/images/logo.png">
            <span class="title-text">广州琳峰泉矿泉饮料有限公司</span>
        </div>
        <nav>
            <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php echo base_url(); ?>">首页</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadintroduce">公司介绍</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadfactory">生产基地</a></li>
                <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/home/loadnews">新闻动态</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadcontact">联系我们</a></li>
            </ul>
        </nav>
    </div>
    <div class="news-list">
        <div class="panel panel-default">
            <div class="panel-heading"><?php echo $post->title;  ?></div>
            <div class="panel-body">
                <?php echo $post->content; ?>
            </div>
        </div>
    </div>
</div>
<footer>
    <ul>
        <li>更多详情请<a href="<?php echo base_url(); ?>index.php/home/loadcontact">联系我们</a></li>
        <li>网站最终解释权归广州琳峰泉矿泉饮料有限公司所有</li>
        <li>Copyright© LinFengQuan company. All rights reserved. 粤ICP备07876550号</li>
    </ul>
</footer>
<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.2.min.js"></script>
<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>
</html>