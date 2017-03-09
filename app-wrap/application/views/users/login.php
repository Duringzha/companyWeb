<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
</head>
<body>
    <div class="container">
        <h2>用户登录</h2>
        <form action="index.php/users/login" method="post">
            <!-- users/check意味着我们待会要用到控制器Login的check函数 -->
            name: <input type="text" name="username"> <br/><br/>
            password: <input type="password" name="password"> <br/><br/>
            <input type="submit" name="submit" value="submit">
        </form>

    </div>
    </body>
</html>