<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($jtmarathonresults->getid(), 'jt_marathon_results_edit', $jtmarathonresults) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_year">
  <?php echo $jtmarathonresults->getyear() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_city">
  <?php echo $jtmarathonresults->getcity() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_event_name">
  <?php echo $jtmarathonresults->getevent_name() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_overall_place">
  <?php echo $jtmarathonresults->getoverall_place() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_age_group_place">
  <?php echo $jtmarathonresults->getage_group_place() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_gender_place">
  <?php echo $jtmarathonresults->getgender_place() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_half_split">
  <?php echo $jtmarathonresults->gethalf_split() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_net_finish_time">
  <?php echo $jtmarathonresults->getnet_finish_time() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_avg_pace">
  <?php echo $jtmarathonresults->getavg_pace() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_notes">
  <?php echo $jtmarathonresults->getnotes() ?>
</td>
