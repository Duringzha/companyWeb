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
            <div class="panel-heading">新闻动态</div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <!-- <td>编号</td> -->
                        <td>文章标题</td>
                        <td>发布时间</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($posts as $item):?>
                        <tr>
                            <!-- <td> <?php //echo $item->id; ?> </td> -->
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/home/loadnewscontent/<?php echo $item->id; ?> ">
                                    <?php echo $item->title; ?> </a></td>
                            <td> <?php echo $item->modified; ?> </td>
                        </tr>
                    <?php endforeach; ?>

                    </tbody>
                </table>
                <!--
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li>
                            <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li>
                            <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                -->
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