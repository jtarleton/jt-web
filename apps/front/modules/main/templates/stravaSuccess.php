Strava



<?php 

function getMiles($i) {
     return $i*0.000621371192;
}

function in_this_week($date_from_user)
{
	$dates = getCurrentWeek();
$start_date = $dates[0];
$end_date = $dates[1]; 
  // Convert to timestamp
  $start_ts = strtotime($start_date);
  $end_ts = strtotime($end_date);
  $user_ts = strtotime($date_from_user);

  // Check that user date is between start & end
  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}



function in_last_week($date_from_user)
{
        $dates = getLastWeek();
$start_date = $dates[0];
$end_date = $dates[1];
  // Convert to timestamp
  $start_ts = strtotime($start_date);
  $end_ts = strtotime($end_date);
  $user_ts = strtotime($date_from_user);

  // Check that user date is between start & end
  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
}




function getCurrentWeek() {
	
	$d = strtotime("today");
$start_week = strtotime("last sunday midnight",$d);
$end_week = strtotime("next saturday",$d);
$start = date("Y-m-d",$start_week); 
$end = date("Y-m-d",$end_week); 

return array($start,$end);
}

function getLastWeek() {

$start_week = mktime(0,0,0,date("m"),date("d")-date("w")-7);
$end_week = mktime(0,0,0,date("m"),date("d")-date("w")-1);

$start = date("Y-m-d",$start_week); 
$end = date("Y-m-d",$end_week); 	

return array($start, $end);
}

?>





<a href="https://www.strava.com/oauth/authorize?client_id=17271&response_type=code&redirect_uri=https://www.jamestarleton.com&state=mystate&approval_prompt=force">Auth</a>

<h2>Last Week</h2>
<?php print_r(getLastWeek()); ?>
<h2>Current Week</h2>
<?php print_r(getCurrentWeek()); ?>




<table border="1" style="width:100%; border:1px solid #000;">
<thead>
<tr>

<th>Date</th>
<th>Description</th>
<th>Duration</th>
<th>City</th>
<th>Distance</th>
</tr>
</thead>
<tbody>
<?php 
$tot = 0;
if(count($runs)){
	foreach($sf_data->getRaw('runs') as $run) {

if(in_this_week($run->start_date_local)){
$tot += $run->distance;

?>

<tr>
<td>
<?php echo $run->start_date_local; ?>
</td>
<td><?php echo $run->name; ?></td>
<td><?php echo $run->moving_time; ?>
</td>

<td>
<?php echo $run->location_city; ?>
</td>
<td>
<?php echo getMiles($run->distance); ?>
</td>



</tr>
<?php }} ?>
</tbody>
<tfoot>
<tr>
<td colspan="4"></td>
<td><?php echo getMiles($tot); ?></td>
</tr>
</tfoot>
<?php 
}
?>
</table>
