<?php

/**
 * jt_users module configuration.
 *
 * @package    jtweb
 * @subpackage jt_users
 * @author     Your name here
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_usersGeneratorConfiguration extends sfModelGeneratorConfiguration
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
    return '%%id%% - %%fbid%% - %%username%% - %%password%% - %%email%% - %%city_id%% - %%last_login%% - %%created%% - %%last_updated%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Jt users List';
  }

  public function getEditTitle()
  {
    return 'Edit Jt users';
  }

  public function getNewTitle()
  {
    return 'New Jt users';
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
    return array(  0 => 'id',  1 => 'fbid',  2 => 'username',  3 => 'password',  4 => 'email',  5 => 'city_id',  6 => 'last_login',  7 => 'created',  8 => 'last_updated',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fbid' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'username' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'password' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'city_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'last_login' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'created' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'last_updated' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'fbid' => array(),
      'username' => array(),
      'password' => array(),
      'email' => array(),
      'city_id' => array(),
      'last_login' => array(),
      'created' => array(),
      'last_updated' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'fbid' => array(),
      'username' => array(),
      'password' => array(),
      'email' => array(),
      'city_id' => array(),
      'last_login' => array(),
      'created' => array(),
      'last_updated' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'fbid' => array(),
      'username' => array(),
      'password' => array(),
      'email' => array(),
      'city_id' => array(),
      'last_login' => array(),
      'created' => array(),
      'last_updated' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'fbid' => array(),
      'username' => array(),
      'password' => array(),
      'email' => array(),
      'city_id' => array(),
      'last_login' => array(),
      'created' => array(),
      'last_updated' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'fbid' => array(),
      'username' => array(),
      'password' => array(),
      'email' => array(),
      'city_id' => array(),
      'last_login' => array(),
      'created' => array(),
      'last_updated' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JtUsersForm';
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
    return 'JtUsersFormFilter';
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
