<?php

/**
 * jt_marathon_results module configuration.
 *
 * @package    jtweb
 * @subpackage jt_marathon_results
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_marathon_resultsGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%year%% - %%city%% - %%event_name%% - %%overall_place%% - %%age_group_place%% - %%gender_place%% - %%half_split%% - %%net_finish_time%% - %%avg_pace%% - %%notes%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Jt marathon results List';
  }

  public function getEditTitle()
  {
    return 'Edit Jt marathon results';
  }

  public function getNewTitle()
  {
    return 'New Jt marathon results';
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
    return array(  0 => 'id',  1 => 'year',  2 => 'city',  3 => 'event_name',  4 => 'overall_place',  5 => 'age_group_place',  6 => 'gender_place',  7 => 'half_split',  8 => 'net_finish_time',  9 => 'avg_pace',  10 => 'notes',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'year' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'city' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'event_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'overall_place' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'age_group_place' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'gender_place' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'half_split' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'net_finish_time' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'avg_pace' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'notes' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'year' => array(),
      'city' => array(),
      'event_name' => array(),
      'overall_place' => array(),
      'age_group_place' => array(),
      'gender_place' => array(),
      'half_split' => array(),
      'net_finish_time' => array(),
      'avg_pace' => array(),
      'notes' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'year' => array(),
      'city' => array(),
      'event_name' => array(),
      'overall_place' => array(),
      'age_group_place' => array(),
      'gender_place' => array(),
      'half_split' => array(),
      'net_finish_time' => array(),
      'avg_pace' => array(),
      'notes' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'year' => array(),
      'city' => array(),
      'event_name' => array(),
      'overall_place' => array(),
      'age_group_place' => array(),
      'gender_place' => array(),
      'half_split' => array(),
      'net_finish_time' => array(),
      'avg_pace' => array(),
      'notes' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'year' => array(),
      'city' => array(),
      'event_name' => array(),
      'overall_place' => array(),
      'age_group_place' => array(),
      'gender_place' => array(),
      'half_split' => array(),
      'net_finish_time' => array(),
      'avg_pace' => array(),
      'notes' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'year' => array(),
      'city' => array(),
      'event_name' => array(),
      'overall_place' => array(),
      'age_group_place' => array(),
      'gender_place' => array(),
      'half_split' => array(),
      'net_finish_time' => array(),
      'avg_pace' => array(),
      'notes' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtMarathonResultsForm';
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
    return 'JtMarathonResultsFormFilter';
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
