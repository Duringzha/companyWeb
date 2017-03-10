<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
</head>
<body>
    <div class="container">
        <h2>用户登录</h2>
        <form action="<?php echo base_url(); ?>index.php/users/login" method="post">
            <!-- users/check意味着我们待会要用到控制器Login的check函数 -->
            用户名: <input type="text" name="username"> <br/><br/>
            密码: <input type="password" name="password"> <br/><br/>
            <input type="submit" name="submit" value="登录">
        </form>

    </div>
    </body>
</html>