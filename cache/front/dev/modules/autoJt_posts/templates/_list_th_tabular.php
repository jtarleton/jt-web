<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_post_title">
  <?php if ('post_title' == $sort[0]): ?>
    <?php echo link_to(__('Post title', array(), 'messages'), '@jt_posts', array('query_string' => 'sort=post_title&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Post title', array(), 'messages'), '@jt_posts', array('query_string' => 'sort=post_title&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_date sf_admin_list_th_post_date">
  <?php if ('post_date' == $sort[0]): ?>
    <?php echo link_to(__('Post date', array(), 'messages'), '@jt_posts', array('query_string' => 'sort=post_date&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Post date', array(), 'messages'), '@jt_posts', array('query_string' => 'sort=post_date&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>