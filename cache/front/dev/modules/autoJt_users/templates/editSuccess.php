<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_users/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Edit Jt users', array(), 'messages') ?></h1>

  <?php include_partial('jt_users/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_users/form_header', array('jtusers' => $jtusers, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_users/form', array('jtusers' => $jtusers, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_users/form_footer', array('jtusers' => $jtusers, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
