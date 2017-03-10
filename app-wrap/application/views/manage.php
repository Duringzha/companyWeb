<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>管理界面</title>
</head>
<body>
<div class="container">
    <h2>账户信息</h2>
    <h3>Welcome !</h3>
    <h4><a href="#">公司简介编辑</a></h4>
    <h4><a href="<?php echo base_url(); ?>index.php/manage/loadnewpost">发布文章</a></h4>
    <table>
        <thead>文章列表</thead>
        <tbody>
        <tr>
            <td>文章编号</td>
            <td>文章标题</td>
            <td>最后修改时间</td>
            <td>编辑</td>
            <td>删除</td>
        </tr>
        <?php
        foreach ($posts as $item):?>
        <tr>
            <td> <?php echo $item->id; ?> </td>
            <td> <a href="#"><?php echo $item->title; ?> </a></td>
            <td> <a href="#"><?php echo $item->modified; ?> </a></td>
            <td> <a href="#"><?php echo '编辑' ?> </a></td>
            <td> <a href="#"><?php echo '删除' ?> </a></td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    <br>
    <a href="<?php echo base_url(); ?>index.php/users/logout">退出登录</a>
</div>
</body>
</html>