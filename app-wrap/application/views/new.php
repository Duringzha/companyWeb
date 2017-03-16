<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>发布新帖</title>
</head>
<body>
<div class="container">

    <h3>题图：</h3>
    <?php if(!empty($error)){
        echo $error;
    } ?>
    <form action="<?php echo base_url(); ?>index.php/manage/uploadimage/111" method="post" enctype="multipart/form-data">
        <input type="file" name="image" /> <br/><br/>
        <input type="submit" name="submit" value="上传题图" />
    </form>
    <br/><br/>

    <form action="<?php echo base_url(); ?>index.php/manage/newpost" method="post">
        文章标题: <input type="text" name="title"> <br/><br/>
        作者: <input type="test" name="author" value="<?php echo $username; ?>" /><br/><br/>
        题图：<input type="text" name="image" readonly="readonly" placeholder="请从题图表单选择上传" value="<?php
        if(!empty($image_name)){
            echo $image_name;
        } ?>" /><br/><br/>

        文章正文: <textarea name="content" rows="10" placeholder="文章正文"></textarea> <br/><br/>
        <input type="submit" name="submit" value="submit">
    </form>
    <br/>
    <a href="<?php echo base_url(); ?>index.php/users/manage">回管理页面</a>
    <br/><br/>
    <a href="<?php echo base_url(); ?>index.php/users/logout">退出登录</a>
</div>
</body>
</html>