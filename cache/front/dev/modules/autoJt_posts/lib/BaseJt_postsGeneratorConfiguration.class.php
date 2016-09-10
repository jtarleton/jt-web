<?php

/**
 * jt_posts module configuration.
 *
 * @package    jtweb
 * @subpackage jt_posts
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_postsGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%=post_title%% - %%post_date%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Posts';
  }

  public function getEditTitle()
  {
    return 'Edit Jt posts';
  }

  public function getNewTitle()
  {
    return 'New Jt posts';
  }

  public function getFilterDisplay()
  {
    return array();
  }

  public function getFormDisplay()
  {
    return array();
  }

  public function getEditDisplay()
  {
    return array(  0 => 'post_title',  1 => 'post_date',  2 => 'post_content',  3 => 'post_author',  4 => 'post_status',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'post_title',  1 => 'post_content',);
  }

  public function getListDisplay()
  {
    return array(  0 => '=post_title',  1 => 'post_date',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_author' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'post_date_gmt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'post_content' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_excerpt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'comment_status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'ping_status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'to_ping' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pinged' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_modified' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'post_modified_gmt' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'post_content_filtered' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_parent' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'guid' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'menu_order' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_mime_type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'comment_count' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_date_gmt' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_excerpt' => array(),
      'post_status' => array(),
      'comment_status' => array(),
      'ping_status' => array(),
      'post_password' => array(),
      'post_name' => array(),
      'to_ping' => array(),
      'pinged' => array(),
      'post_modified' => array(),
      'post_modified_gmt' => array(),
      'post_content_filtered' => array(),
      'post_parent' => array(),
      'guid' => array(),
      'menu_order' => array(),
      'post_type' => array(),
      'post_mime_type' => array(),
      'comment_count' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_date_gmt' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_excerpt' => array(),
      'post_status' => array(),
      'comment_status' => array(),
      'ping_status' => array(),
      'post_password' => array(),
      'post_name' => array(),
      'to_ping' => array(),
      'pinged' => array(),
      'post_modified' => array(),
      'post_modified_gmt' => array(),
      'post_content_filtered' => array(),
      'post_parent' => array(),
      'guid' => array(),
      'menu_order' => array(),
      'post_type' => array(),
      'post_mime_type' => array(),
      'comment_count' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_date_gmt' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_excerpt' => array(),
      'post_status' => array(),
      'comment_status' => array(),
      'ping_status' => array(),
      'post_password' => array(),
      'post_name' => array(),
      'to_ping' => array(),
      'pinged' => array(),
      'post_modified' => array(),
      'post_modified_gmt' => array(),
      'post_content_filtered' => array(),
      'post_parent' => array(),
      'guid' => array(),
      'menu_order' => array(),
      'post_type' => array(),
      'post_mime_type' => array(),
      'comment_count' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_date_gmt' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_excerpt' => array(),
      'post_status' => array(),
      'comment_status' => array(),
      'ping_status' => array(),
      'post_password' => array(),
      'post_name' => array(),
      'to_ping' => array(),
      'pinged' => array(),
      'post_modified' => array(),
      'post_modified_gmt' => array(),
      'post_content_filtered' => array(),
      'post_parent' => array(),
      'guid' => array(),
      'menu_order' => array(),
      'post_type' => array(),
      'post_mime_type' => array(),
      'comment_count' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_date_gmt' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_excerpt' => array(),
      'post_status' => array(),
      'comment_status' => array(),
      'ping_status' => array(),
      'post_password' => array(),
      'post_name' => array(),
      'to_ping' => array(),
      'pinged' => array(),
      'post_modified' => array(),
      'post_modified_gmt' => array(),
      'post_content_filtered' => array(),
      'post_parent' => array(),
      'guid' => array(),
      'menu_order' => array(),
      'post_type' => array(),
      'post_mime_type' => array(),
      'comment_count' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtPostsForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'JtPostsFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array('post_date', 'desc');
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
