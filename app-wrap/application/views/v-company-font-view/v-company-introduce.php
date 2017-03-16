<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>琳峰泉-公司简介</title>
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
                <li role="presentation"><a href="<?php echo base_url(); ?>">首页</a></li>
                <li role="presentation" class="active"><a href="<?php echo base_url(); ?>index.php/home/loadintroduce">公司介绍</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadfactory">生产基地</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadnews">新闻动态</a></li>
                <li role="presentation"><a href="<?php echo base_url(); ?>index.php/home/loadcontact">联系我们</a></li>
            </ul>
        </nav>
        <div class="introduce-body">
            <div class="introduce-wrap">
                <div class="int-title">公司简介</div>
                <div class="int-content">
                    <?php echo $introduce->info; ?>
                </div>
            </div>
            <div class="product-wrap">
                <div class="pro-title">公司产品</div>
                <div class="pro-content">
                    <p>
                        水的好坏取决于水源，而我们琳峰泉就取自于非常好的水源。琳峰泉的水源坐落于远离尘嚣的白云帽峰山最深处，
                        周围群山环抱，绿叶葱葱，没有人为的污染，完全的自然原生态环境。那里的泉水缓慢地经过层层的下渗，被各
                        种致密的土层、岩石层层覆盖保护着，加上大自然的神奇洁净过滤作用，使得琳峰泉的水质清甜甘醇，清冽爽口。
                    </p>
                    <p>
                        琳峰泉水含有丰富的天然矿物质，其中偏硅酸含量高达39.9mg/L，含有微量元素硒，硒元素有美容养颜抗衰老、防癌等功效，是人体必备的矿物质元素。
                    </p>
                    <p>
                        目前公司已拥有饮用产品规格：18L桶装水，18.9L桶装水
                    </p>
                </div>
            </div>
        </div>
    </div>
</header>

<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.2.min.js"></script>
<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
<script>
    $(function(){
        showContent();
        if($(window).height() >= 700){
            showProduct();
        }
    });
    function showContent(){
        var $intTitle = $(".int-title");
        var $intContent = $(".int-content");
        var timer = setTimeout(function(){
            $intTitle.addClass("titleMove");
            $intContent.addClass("contentMove");
            clearTimeout(timer);
        },200)
    }
    function showProduct(){
        var $proTitle = $(".pro-title");
        var $proContent = $(".pro-content");
        var timer = setTimeout(function(){
            $proTitle.addClass("proTitleMove");
            $proContent.addClass("proContentMove");
            clearTimeout(timer);
        },200)
    }
</script>
</body>
</html>