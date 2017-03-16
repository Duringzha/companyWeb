<?php
/**
 * Author: Miiog
 * Date: 2017/3/16
 * Time: 21:03
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title><?php echo '文章'.$post->id; ?></title>
</head>
<body>
<div class="container">
    <h1>编辑公司介绍</h1>
    <form action="<?php echo base_url(); ?>index.php/manage/updateinfo" method="post">

        <textarea name="information" rows="30" ><?php echo $introduction->info; ?></textarea> <br/><br/>
        <input type="submit" name="submit" value="发布">
    </form>
    <br>
    <a href="<?php echo base_url(); ?>index.php/manage">回管理页面</a>
</div>
</body>
</html>


