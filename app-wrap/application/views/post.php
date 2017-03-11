<?php
/**
 * Author: Miiog
 * Date: 2017/3/10
 * Time: 14:12
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
    <form action="<?php echo base_url(); ?>index.php/manage/updatepost?id=<?php echo $post->id; ?>" method="post">
        文章标题: <input type="text" name="title" value=" <?php echo $post->title;  ?> "> <br/><br/>
        作者: <input type="test" name="author" value="<?php echo $post->author; ?>"> <br/><br/>
        <!-- 题图: <input type="file" name="image"> <br/><br/> -->
        文章正文: <textarea name="content" rows="10" ><?php echo $post->content; ?></textarea> <br/><br/>
        <input type="submit" name="submit" value="更新">
    </form>
    <br>
    <a href="<?php echo base_url(); ?>index.php/manage">回管理页面</a>
</div>
</body>
</html>
