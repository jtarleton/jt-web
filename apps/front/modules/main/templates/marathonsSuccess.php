<table id="example" class="dataTable table table-striped table-condensed table-bordered">
<thead>

<tr>

<?php 
$fields=array('id',
'year',
'city',
'event_name',
'overall_place',
'age_group_place',
'gender_place',
'half_split',
'net_finish_time',
'avg_pace',
'notes');

foreach($fields as $name)
echo sprintf('<th>%s</th>', $name );
?>

</tr>
</thead>
<tbody>
<?php foreach($marathons as $marathon): ?>
<tr>
<?php foreach($fields as $get): $getter = sprintf("get%s", ucfirst($get)); ?>
<td><?php echo $marathon->$getter(); ?></td>
<?php endforeach; ?>
</tr>
<?php endforeach; ?>
</tbody>
<tfoot>
<tr>
<td colspan="11"></td>
</tr>
</tfoot>
</table>
