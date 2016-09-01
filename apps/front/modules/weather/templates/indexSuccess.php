<h2>Weather</h2>
<h4>Forecast for New York, NY</h4>
<table class="table table-condensed table-bordered table-striped">
<tr>
<th></th>
<th>High Temp</th>
<th>Low Temp</th>
</tr>
<?php foreach($final as $dt=>$temps): ?>
<tr><td><?php echo format_date($dt, 'P'); ?>
</td><td><?php echo $temps['high_temp']; ?>&deg;F</td><td><?php echo $temps['low_temp']; ?>&deg;F</td></tr><?php
endforeach; ?></table>
