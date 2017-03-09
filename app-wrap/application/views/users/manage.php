<!DOCTYPE html>
<html>
<head>
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel='stylesheet' type='text/css' />
    <meta charset="utf-8" />
    <title><?php echo $title; ?></title>
</head>
<body>
<div class="container">
    <h2>账户信息</h2>
    <h3>Welcome <?php echo $name; ?>!</h3>
    <div class="account-info">
        <p><b>Username: </b><?php echo $name; ?></p>
    </div>
    <a href="<?php echo base_url(); ?>index.php/users/logout">退出登录</a>
</div>
</body>
</html>