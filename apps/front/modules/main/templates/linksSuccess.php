<?php use_helper('sort'); ?>
<?php 
$vals=Doctrine_Core::getTable('JtLinks')->findAll()->toArray();



//if($_SESSION['fbsess']):
?>

<table id="example" class="dataTable table table-striped table-bordered table-condensed">
<thead>
<tr>
<th>Category</th><th>Link</th>
</tr>
</thead>
<tbody>
<?php
foreach( $vals as $link):

?>
<tr>
<td><?php echo $link['cat']; ?></td><td><?php echo link_to($link['text'], $link['url']); ?></td></tr>
<?php endforeach; ?>
</tbody>
<?php //endif; ?></table>
