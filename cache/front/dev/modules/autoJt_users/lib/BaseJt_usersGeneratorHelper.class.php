<?php

/**
 * jt_users module configuration.
 *
 * @package    jtweb
 * @subpackage jt_users
 * @author     Your name here
 * @version    SVN: $Id: helper.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJt_usersGeneratorHelper extends sfModelGeneratorHelper
{
  public function getUrlForAction($action)
  {
    return 'list' == $action ? 'jt_users' : 'jt_users_'.$action;
  }
}
