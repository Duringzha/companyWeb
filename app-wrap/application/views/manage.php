<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理页面</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/manage.css" />
</head>
<body>
<div class="manage-wrap">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo base_url(); ?>">广州琳峰泉矿泉饮料有限公司</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>index.php/users/logout">退出登陆</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="link-list">
        <ul>
            <li><a href="">公司简介模块管理</a></li>
            <li><a href="">新闻文章模块编辑</a></li>
            <li><a href="">生产基地模块管理</a></li>
            <li><a href="">联系我们模块管理</a></li>
        </ul>
    </div>
    <div class="manage-content">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><a href="">新闻文章管理</a></h3>
                <a href="<?php echo base_url(); ?>index.php/manage/loadnewpost"><button class="btn btn-primary btn-sm addNewBtn">发布文章</button></a>
            </div>
            <div class="panel-body">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <td>编号</td>
                        <td>文章标题</td>
                        <td>发布时间</td>
                        <td>操作</td>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    foreach ($posts as $item):?>
                    <tr>
                        <td> <?php echo $item->id; ?> </td>
                        <td> <?php echo $item->title; ?> </td>
                        <td> <?php echo $item->modified; ?> </td>
                        <td>
                            <a href="<?php echo base_url(); ?>index.php/manage/loadpost?id=<?php echo $item->id; ?> "><button class="btn btn-sm btn-primary">编辑</button></a>
                            <button class="btn btn-sm btn-danger">删除</button>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
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
            </div>
        </div>
    </div>
</div>
<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/jquery-1.12.2.min.js"></script>
<script type="application/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
</body>
</html>