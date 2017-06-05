<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_marathon_results/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Jt marathon results', array(), 'messages') ?></h1>

  <?php include_partial('jt_marathon_results/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_marathon_results/form_header', array('jtmarathonresults' => $jtmarathonresults, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_marathon_results/form', array('jtmarathonresults' => $jtmarathonresults, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_marathon_results/form_footer', array('jtmarathonresults' => $jtmarathonresults, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
