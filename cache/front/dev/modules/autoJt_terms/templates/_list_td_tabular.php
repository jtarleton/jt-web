<td class="sf_admin_text sf_admin_list_td_term_id">
  <?php echo link_to($terms->getterm_id(), 'jt_terms_edit', $terms) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <?php echo $terms->getname() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
  <?php echo $terms->getslug() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_term_group">
  <?php echo $terms->getterm_group() ?>
</td>
