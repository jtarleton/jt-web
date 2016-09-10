<td class="sf_admin_text sf_admin_list_td_post_title">
  <?php echo link_to($posts->getpost_title(), 'jt_posts_edit', $posts) ?>
</td>
<td class="sf_admin_date sf_admin_list_td_post_date">
  <?php echo false !== strtotime($posts->getpost_date()) ? format_date($posts->getpost_date(), "f") : '&nbsp;' ?>
</td>
