<?php

/**
 * geodata actions.
 *
 * @package    jtweb
 * @subpackage geodata
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class geodataActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
//$JtGeodataTable = new JtGeodataTable;
$obj= Doctrine::getTable('JtGeodata')->find(1);
$this->geodata_obj = $obj;
   // $this->forward('default', 'module');
  }


	static function lcfirst($str) {
    		return strtolower(substr($str, 0, 1)) . substr($str, 1);
	}

}
