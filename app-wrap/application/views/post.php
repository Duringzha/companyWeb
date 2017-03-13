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
    <h3>题图：</h3>
    <?php if(!empty($error)){ echo $error; } ?>
    <form action="<?php echo base_url(); ?>index.php/manage/uploadImage/222/<?php echo $post->id; ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="image" /> <br/><br/>
        <input type="submit" name="submit" value="上传题图" />
    </form>
    <br/>
    <?php if(!empty($image_name)){
        echo '<img src="'.base_url().'images/'.$image_name.'">';//新上传的图片
    }
    else{
        echo '<img src="'.base_url().'images/'.$post->image.'">';
    }
    ?>

    <br/>
    <form action="<?php echo base_url(); ?>index.php/manage/updatepost?id=<?php echo $post->id; ?>" method="post">
        文章标题: <input type="text" name="title" value=" <?php echo $post->title;  ?> "> <br/><br/>
        作者: <input type="test" name="author" value="<?php echo $post->author; ?>"> <br/><br/>
        题图：<input type="text" name="image" readonly="readonly" placeholder="请从题图表单选择上传" value="<?php
        if(!empty($image_name)){
            echo $image_name;
        } ?>" /><br/><br/>
        文章正文: <textarea name="content" rows="10" ><?php echo $post->content; ?></textarea> <br/><br/>
        <input type="submit" name="submit" value="更新">
    </form>
    <br>
    <a href="<?php echo base_url(); ?>index.php/manage">回管理页面</a>
</div>
</body>
</html>
