<?php echo link_to('Back to Post Index', '@homepage'); ?>
<h2><?php echo $postObj->getPost_Title(); ?>
</h2>

<i><?php echo $postObj->getPost_Date();  ?></i>

<p>
<?php echo $postObj->getPost_Content(); ?>
</p>
