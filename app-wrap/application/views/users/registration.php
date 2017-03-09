<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
</head>
<body>
<div class="container">
    <h2>用户注册</h2>
    <form action="index.php/users/regist" method="post">
        <!-- 当提交时触发signin/regist控制器 -->
        name: <input type="text" name="username"> <br/><br/>
        password: <input type="password" name="password"> <br/><br/>
        <input type="submit" name="submit" value="submit">
    </form>
</div>
</body>
</html>