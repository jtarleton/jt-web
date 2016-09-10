<td colspan="4">
  <?php echo __('%%term_id%% - %%name%% - %%slug%% - %%term_group%%', array('%%term_id%%' => link_to($jtterms->getterm_id(), 'jt_terms_edit', $jtterms), '%%name%%' => $jtterms->getname(), '%%slug%%' => $jtterms->getslug(), '%%term_group%%' => $jtterms->getterm_group()), 'messages') ?>
</td>
