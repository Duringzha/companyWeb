<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>琳峰泉</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css" />
</head>
<body>
<header>
    <div class="title">
        <div class="logo">
            <img src="<?php echo base_url(); ?>assets/images/logo.png">
            <span class="title-text">广州琳峰泉矿泉饮料有限公司</span>
        </div>
        <nav>
            <ul class="nav nav-pills">
                <li role="presentation" class="active"><a href="<?php echo base_url(); ?>">首页</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadintroduce">公司介绍</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadfactory">生产基地</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadnews">新闻动态</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadcontact">联系我们</a></li>
            </ul>
        </nav>
        <div class="slogan">
            <span class="slogan-text first-title">源于天然,只为健康</span>
            <span class="slogan-text last-title">喝山泉好水,享健康人生</span>
            <span class="slogan-button">
                <button id="learnMore">了解更多</button>
            </span>
        </div>
    </div>
</header>
<div class="main">
    <div class="article">
        <div class="article-wrap left">
            <div class="article-img">
                <a href=""><img src="<?php echo base_url(); ?>assets/images/p2.jpg"></a>
            </div>
            <div class="article-content">
                <div class="article-title"><a href=""> 文章标题 </a></div>
                <div class="article-main">
                    水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。
                    琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，周围群山环抱，绿叶葱葱，
                    没有人为的污染，完全的自然原生态环境。那里的泉水缓慢地经过层层的下渗，
                    被各种致密的土层、岩石层层覆盖保护着...
                </div>
            </div>
        </div>
        <div class="article-wrap right">
            <div class="article-img">
                <a href=""><img src="<?php echo base_url(); ?>assets/images/p2.jpg"></a>
            </div>
            <div class="article-content">
                <div class="article-title"><a href="">文章标题</a></div>
                <div class="article-main">
                    水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。
                    琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，周围群山环抱，绿叶葱葱，
                    没有人为的污染，完全的自然原生态环境。那里的泉水缓慢地经过层层的下渗，
                    被各种致密的土层、岩石层层覆盖保护着...
                </div>
            </div>
        </div>
    </div>
    <div class="article">
        <div class="article-wrap-full">
            <div class="article-full-img left">
                <a href=""><img src="<?php echo base_url(); ?>assets/images/p2.jpg"></a>
            </div>
            <div class="article-full-content right">
                <div class="article-full-title"><a href="">文章标题</a></div>
                <div class="article-full-main">
                    水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。
                    琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，周围群山环抱，
                    绿叶葱葱，没有人为的污染，完全的自然原生态环境。那里的泉水
                    缓慢地经过层层的下渗，被各种致密的土层、岩石层层覆盖保护着...
                </div>
                <div class="article-full-title"><small><a href="">文章标题文章标题</a></small></div>
                <div class="article-full-main">
                    水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。
                    琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，周围群山环抱，
                    绿叶葱葱，没有人为的污染，完全的自然原生态环境。那里的泉水
                    缓慢地经过层层的下渗，被各种致密的土层、岩石层层覆盖保护着...
                </div>
                </br>
                <div class="article-full-main">
                    水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。
                    琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，周围群山环抱，
                    绿叶葱葱，没有人为的污染，完全的自然原生态环境。那里的泉水
                    缓慢地经过层层的下渗，被各种致密的土层、岩石层层覆盖保护着...
                </div>
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
<script>
    $(function(){
        showSlogan();
        learnMoreBtn();
    });
    function showSlogan(){
        var $firstTitle = $(".first-title");
        var $lastTitle = $(".last-title");
        var $sloganBtn = $(".slogan-button");
        var timer = setTimeout(function(){
            $firstTitle.addClass("first-title-show");
            $lastTitle.addClass("last-title-show");
            $sloganBtn.addClass("slogan-button-show");
            clearTimeout(timer);
        },200)
    }
    function learnMoreBtn(){
        var $btn = $("#learnMore");
        $btn.click(function(){
            $("body").animate({scrollTop: '600'}, 800)
        })
    }
</script>
</body>
</html>