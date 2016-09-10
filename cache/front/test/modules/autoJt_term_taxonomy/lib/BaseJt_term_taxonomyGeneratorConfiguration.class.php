<?php

/**
 * jt_term_taxonomy module configuration.
 *
 * @package    jtweb
 * @subpackage jt_term_taxonomy
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_term_taxonomyGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%term_taxonomy_id%% - %%term_id%% - %%taxonomy%% - %%description%% - %%parent%% - %%count%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Jt term taxonomy List';
  }

  public function getEditTitle()
  {
    return 'Edit Jt term taxonomy';
  }

  public function getNewTitle()
  {
    return 'New Jt term taxonomy';
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
    return array(  0 => 'term_taxonomy_id',  1 => 'term_id',  2 => 'taxonomy',  3 => 'description',  4 => 'parent',  5 => 'count',);
  }

  public function getFieldsDefault()
  {
    return array(
      'term_taxonomy_id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'term_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'taxonomy' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'description' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'parent' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'count' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'term_taxonomy_id' => array(),
      'term_id' => array(),
      'taxonomy' => array(),
      'description' => array(),
      'parent' => array(),
      'count' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'term_taxonomy_id' => array(),
      'term_id' => array(),
      'taxonomy' => array(),
      'description' => array(),
      'parent' => array(),
      'count' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'term_taxonomy_id' => array(),
      'term_id' => array(),
      'taxonomy' => array(),
      'description' => array(),
      'parent' => array(),
      'count' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'term_taxonomy_id' => array(),
      'term_id' => array(),
      'taxonomy' => array(),
      'description' => array(),
      'parent' => array(),
      'count' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'term_taxonomy_id' => array(),
      'term_id' => array(),
      'taxonomy' => array(),
      'description' => array(),
      'parent' => array(),
      'count' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtTermTaxonomyForm';
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
    return 'JtTermTaxonomyFormFilter';
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
