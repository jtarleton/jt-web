<table class="table table-condensed table-bordered table-striped">

<?php  foreach($sundata as $k=>$d): ?>

<tr><td><?php echo $k; ?></td><td><?php echo date('Y-m-d g:i:s a',$d); ?></td></tr>
<?php endforeach; ?>
</table>
