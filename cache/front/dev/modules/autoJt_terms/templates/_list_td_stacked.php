<td colspan="4">
  <?php echo __('%%term_id%% - %%name%% - %%slug%% - %%term_group%%', array('%%term_id%%' => link_to($terms->getterm_id(), 'jt_terms_edit', $terms), '%%name%%' => $terms->getname(), '%%slug%%' => $terms->getslug(), '%%term_group%%' => $terms->getterm_group()), 'messages') ?>
</td>
