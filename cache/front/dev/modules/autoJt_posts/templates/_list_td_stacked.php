<td colspan="2">
  <?php echo __('%%post_title%% - %%post_date%%', array('%%post_title%%' => link_to($posts->getpost_title(), 'jt_posts_edit', $posts), '%%post_date%%' => false !== strtotime($posts->getpost_date()) ? format_date($posts->getpost_date(), "f") : '&nbsp;'), 'messages') ?>
</td>
