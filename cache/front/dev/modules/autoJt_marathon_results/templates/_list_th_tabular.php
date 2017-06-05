<?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_id">
  <?php if ('id' == $sort[0]): ?>
    <?php echo link_to(__('Id', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=id&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Id', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=id&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_year">
  <?php if ('year' == $sort[0]): ?>
    <?php echo link_to(__('Year', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=year&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Year', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=year&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_city">
  <?php if ('city' == $sort[0]): ?>
    <?php echo link_to(__('City', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=city&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('City', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=city&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_event_name">
  <?php if ('event_name' == $sort[0]): ?>
    <?php echo link_to(__('Event name', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=event_name&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Event name', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=event_name&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_overall_place">
  <?php if ('overall_place' == $sort[0]): ?>
    <?php echo link_to(__('Overall place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=overall_place&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Overall place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=overall_place&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_age_group_place">
  <?php if ('age_group_place' == $sort[0]): ?>
    <?php echo link_to(__('Age group place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=age_group_place&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Age group place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=age_group_place&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_gender_place">
  <?php if ('gender_place' == $sort[0]): ?>
    <?php echo link_to(__('Gender place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=gender_place&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Gender place', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=gender_place&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_half_split">
  <?php if ('half_split' == $sort[0]): ?>
    <?php echo link_to(__('Half split', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=half_split&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Half split', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=half_split&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_net_finish_time">
  <?php if ('net_finish_time' == $sort[0]): ?>
    <?php echo link_to(__('Net finish time', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=net_finish_time&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Net finish time', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=net_finish_time&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_avg_pace">
  <?php if ('avg_pace' == $sort[0]): ?>
    <?php echo link_to(__('Avg pace', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=avg_pace&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Avg pace', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=avg_pace&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?><?php slot('sf_admin.current_header') ?>
<th class="sf_admin_text sf_admin_list_th_notes">
  <?php if ('notes' == $sort[0]): ?>
    <?php echo link_to(__('Notes', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=notes&sort_type='.($sort[1] == 'asc' ? 'desc' : 'asc'))) ?>
    <?php echo image_tag(sfConfig::get('sf_admin_module_web_dir').'/images/'.$sort[1].'.png', array('alt' => __($sort[1], array(), 'sf_admin'), 'title' => __($sort[1], array(), 'sf_admin'))) ?>
  <?php else: ?>
    <?php echo link_to(__('Notes', array(), 'messages'), '@jt_marathon_results', array('query_string' => 'sort=notes&sort_type=asc')) ?>
  <?php endif; ?>
</th>
<?php end_slot(); ?>
<?php include_slot('sf_admin.current_header') ?>