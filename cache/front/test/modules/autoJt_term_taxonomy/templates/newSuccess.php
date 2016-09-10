<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_term_taxonomy/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Jt term taxonomy', array(), 'messages') ?></h1>

  <?php include_partial('jt_term_taxonomy/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_term_taxonomy/form_header', array('jttermtaxonomy' => $jttermtaxonomy, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_term_taxonomy/form', array('jttermtaxonomy' => $jttermtaxonomy, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_term_taxonomy/form_footer', array('jttermtaxonomy' => $jttermtaxonomy, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
