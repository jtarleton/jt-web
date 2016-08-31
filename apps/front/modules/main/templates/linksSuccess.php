<?php use_helper('sort'); ?>
<?php 
$vals=Doctrine_Core::getTable('JtLinks')->findAll()->toArray();



//if($_SESSION['fbsess']):
?>

<table class="dataTable table-striped"><tbody>
<?php
foreach( $vals as $link):

?>
<tr>
<td><?php echo $link['cat']; ?></td><td><?php echo link_to($link['text'], $link['url']); ?></td></tr>
<?php endforeach; ?>
</tbody>
<?php //endif; ?></table>
