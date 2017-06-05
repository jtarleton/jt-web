<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_links/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Jt links', array(), 'messages') ?></h1>

  <?php include_partial('jt_links/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_links/form_header', array('jtlinks' => $jtlinks, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_links/form', array('jtlinks' => $jtlinks, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_links/form_footer', array('jtlinks' => $jtlinks, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
