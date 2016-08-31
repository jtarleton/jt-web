<?php

/**
 * sun actions.
 *
 * @package    jtweb
 * @subpackage sun
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class sunActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {


	$sundata= date_sun_info(
time(),

40.80822,
-73.95449

);
asort($sundata);
	$this->sundata = $sundata;
   // $this->forward('default', 'module');
  }
}
