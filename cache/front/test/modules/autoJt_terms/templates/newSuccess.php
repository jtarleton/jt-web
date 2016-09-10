<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_terms/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Jt terms', array(), 'messages') ?></h1>

  <?php include_partial('jt_terms/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_terms/form_header', array('jtterms' => $jtterms, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_terms/form', array('jtterms' => $jtterms, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_terms/form_footer', array('jtterms' => $jtterms, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
