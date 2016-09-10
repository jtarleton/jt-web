<td colspan="6">
  <?php echo __('%%term_taxonomy_id%% - %%term_id%% - %%taxonomy%% - %%description%% - %%parent%% - %%count%%', array('%%term_taxonomy_id%%' => link_to($jttermtaxonomy->getterm_taxonomy_id(), 'jt_term_taxonomy_edit', $jttermtaxonomy), '%%term_id%%' => $jttermtaxonomy->getterm_id(), '%%taxonomy%%' => $jttermtaxonomy->gettaxonomy(), '%%description%%' => $jttermtaxonomy->getdescription(), '%%parent%%' => $jttermtaxonomy->getparent(), '%%count%%' => $jttermtaxonomy->getcount()), 'messages') ?>
</td>
