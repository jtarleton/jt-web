<td class="sf_admin_text sf_admin_list_td_term_id">
  <?php echo link_to($jtterms->getterm_id(), 'jt_terms_edit', $jtterms) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $jtterms->getname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $jtterms->getslug() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_term_group">
  <?php echo $jtterms->getterm_group() ?>
</td>
