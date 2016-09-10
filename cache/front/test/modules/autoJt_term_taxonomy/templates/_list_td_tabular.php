<td class="sf_admin_text sf_admin_list_td_term_taxonomy_id">
  <?php echo link_to($jttermtaxonomy->getterm_taxonomy_id(), 'jt_term_taxonomy_edit', $jttermtaxonomy) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_term_id">
  <?php echo $jttermtaxonomy->getterm_id() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_taxonomy">
  <?php echo $jttermtaxonomy->gettaxonomy() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_description">
  <?php echo $jttermtaxonomy->getdescription() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_parent">
  <?php echo $jttermtaxonomy->getparent() ?>
</td>
<td class="sf_admin_text sf_admin_list_td_count">
  <?php echo $jttermtaxonomy->getcount() ?>
</td>
