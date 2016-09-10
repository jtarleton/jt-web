<?php

/**
 * jt_terms module configuration.
 *
 * @package    jtweb
 * @subpackage jt_terms
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_termsGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%term_id%% - %%name%% - %%slug%% - %%term_group%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Jt terms List';
  }

  public function getEditTitle()
  {
    return 'Edit Jt terms';
  }

  public function getNewTitle()
  {
    return 'New Jt terms';
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
    return array(  0 => 'term_id',  1 => 'name',  2 => 'slug',  3 => 'term_group',);
  }

  public function getFieldsDefault()
  {
    return array(
      'term_id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'slug' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'term_group' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'term_id' => array(),
      'name' => array(),
      'slug' => array(),
      'term_group' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'term_id' => array(),
      'name' => array(),
      'slug' => array(),
      'term_group' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'term_id' => array(),
      'name' => array(),
      'slug' => array(),
      'term_group' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'term_id' => array(),
      'name' => array(),
      'slug' => array(),
      'term_group' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'term_id' => array(),
      'name' => array(),
      'slug' => array(),
      'term_group' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtTermsForm';
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
    return 'JtTermsFormFilter';
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
