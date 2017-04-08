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
    return '%%post_status%% - %%=post_title%% - %%post_date%%';
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
    return array(  0 => 'post_status',  1 => 'post_date',);
  }

  public function getFormDisplay()
  {
    return array(  0 => 'post_title',  1 => 'post_content',  2 => 'post_date',  3 => 'post_author',  4 => 'post_status',);
  }

  public function getEditDisplay()
  {
    return array(  0 => 'post_title',  1 => 'post_date',  2 => 'post_content',  3 => 'post_author',  4 => 'post_status',);
  }

  public function getNewDisplay()
  {
    return array(  0 => 'post_title',  1 => 'post_content',  2 => 'post_date',  3 => 'post_author',  4 => 'post_status',);
  }

  public function getListDisplay()
  {
    return array(  0 => 'post_status',  1 => '=post_title',  2 => 'post_date',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_author' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'post_content' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_title' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'post_modified' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_status' => array(),
      'post_modified' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_status' => array(),
      'post_modified' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_status' => array(),
      'post_modified' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_status' => array(),
      'post_modified' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'post_author' => array(),
      'post_date' => array(),
      'post_content' => array(),
      'post_title' => array(),
      'post_status' => array(),
      'post_modified' => array(),
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
