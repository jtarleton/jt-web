<?php use_helper('Date'); ?>
<h2>Sun Data</h2>
<h4>New York, NY</h4>
<table class="table table-condensed table-bordered table-striped">

<?php $i=0; foreach($sundata as $k=>$d): ?>

<tr><td><?php if($i==0) echo format_date($d,'P'); ?></td>
<td><?php echo ucwords(str_replace('_',' ',$k)); ?></td><td><?php echo date('g:i:s a', $d); ?></td>
</tr>
<?php $i++; endforeach; ?>
</table>
