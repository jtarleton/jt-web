<?php

/**
 * jt_links module configuration.
 *
 * @package    jtweb
 * @subpackage jt_links
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_linksGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%lid%% - %%text%% - %%url%% - %%cat%% - %%public%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Jt links List';
  }

  public function getEditTitle()
  {
    return 'Edit Jt links';
  }

  public function getNewTitle()
  {
    return 'New Jt links';
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
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'id',  1 => 'lid',  2 => 'text',  3 => 'url',  4 => 'cat',  5 => 'public',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'lid' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'text' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'url' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'cat' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'public' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'lid' => array(),
      'text' => array(),
      'url' => array(),
      'cat' => array(),
      'public' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'lid' => array(),
      'text' => array(),
      'url' => array(),
      'cat' => array(),
      'public' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'lid' => array(),
      'text' => array(),
      'url' => array(),
      'cat' => array(),
      'public' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'lid' => array(),
      'text' => array(),
      'url' => array(),
      'cat' => array(),
      'public' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'lid' => array(),
      'text' => array(),
      'url' => array(),
      'cat' => array(),
      'public' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtLinksForm';
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
    return 'JtLinksFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 20;
  }

  public function getDefaultSort()
  {
    return array(null, null);
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
