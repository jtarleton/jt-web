<td colspan="6">
  <?php echo __('%%id%% - %%lid%% - %%text%% - %%url%% - %%cat%% - %%public%%', array('%%id%%' => link_to($jtlinks->getid(), 'jt_links_edit', $jtlinks), '%%lid%%' => $jtlinks->getlid(), '%%text%%' => $jtlinks->gettext(), '%%url%%' => $jtlinks->geturl(), '%%cat%%' => $jtlinks->getcat(), '%%public%%' => $jtlinks->getpublic()), 'messages') ?>
</td>
