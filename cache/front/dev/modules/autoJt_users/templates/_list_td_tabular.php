<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($jtusers->getid(), 'jt_users_edit', $jtusers) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_fbid">
  <?php echo $jtusers->getfbid() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_username">
  <?php echo $jtusers->getusername() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_password">
  <?php echo $jtusers->getpassword() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_email">
  <?php echo $jtusers->getemail() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_city_id">
  <?php echo $jtusers->getcity_id() ?>
</td>
<td class="sf_admin_date sf_admin_list_td_last_login">
  <?php echo false !== strtotime($jtusers->getlast_login()) ? format_date($jtusers->getlast_login(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_created">
  <?php echo false !== strtotime($jtusers->getcreated()) ? format_date($jtusers->getcreated(), "f") : '&nbsp;' ?>
</td>
<td class="sf_admin_date sf_admin_list_td_last_updated">
  <?php echo false !== strtotime($jtusers->getlast_updated()) ? format_date($jtusers->getlast_updated(), "f") : '&nbsp;' ?>
</td>
