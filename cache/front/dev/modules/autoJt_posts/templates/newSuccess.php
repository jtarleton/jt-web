<?php use_helper('I18N', 'Date') ?>
<?php include_partial('jt_posts/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Jt posts', array(), 'messages') ?></h1>

  <?php include_partial('jt_posts/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('jt_posts/form_header', array('posts' => $posts, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('jt_posts/form', array('posts' => $posts, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('jt_posts/form_footer', array('posts' => $posts, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
