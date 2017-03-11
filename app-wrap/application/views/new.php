<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>发布新帖</title>
</head>
<body>
<div class="container">
    <form action="<?php echo base_url(); ?>index.php/manage/newpost" method="post">
        文章标题: <input type="text" name="title"> <br/><br/>
        作者: <input type="test" name="author" value="<?php echo $username; ?>"> <br/><br/>
        <!-- 题图: <input type="file" name="image"> <br/><br/> -->
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