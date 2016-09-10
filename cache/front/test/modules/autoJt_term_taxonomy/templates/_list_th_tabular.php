<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_term_taxonomy_id">
  <?php if ('term_taxonomy_id' == $sort[0]): ?>
    <?php echo link_to(__('Term taxonomy', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=term_taxonomy_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Term taxonomy', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=term_taxonomy_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_term_id">
  <?php if ('term_id' == $sort[0]): ?>
    <?php echo link_to(__('Term', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=term_id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Term', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=term_id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_taxonomy">
  <?php if ('taxonomy' == $sort[0]): ?>
    <?php echo link_to(__('Taxonomy', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=taxonomy&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Taxonomy', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=taxonomy&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_description">
  <?php if ('description' == $sort[0]): ?>
    <?php echo link_to(__('Description', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=description&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Description', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=description&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_parent">
  <?php if ('parent' == $sort[0]): ?>
    <?php echo link_to(__('Parent', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=parent&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Parent', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=parent&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_count">
  <?php if ('count' == $sort[0]): ?>
    <?php echo link_to(__('Count', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=count&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Count', array(), 'messages'), '@jt_term_taxonomy', array('query_string' => 'sort=count&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>