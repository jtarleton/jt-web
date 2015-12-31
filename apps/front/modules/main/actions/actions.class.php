<?php

/**
 * main actions.
 *
 * @package    homewww
 * @subpackage main
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
//namespace Httpful;
use \Httpful\Request;
use \Facebook;
class mainActions extends sfActions
{
public function executeArunnersplace(){ 
$this->setLayout('skinless');
}
public function executeLinks(sfWebRequest $request) {

}
public function executePics(sfWebRequest $request) {
$this->pics = array(

);
}
public function executeRunning(sfWebRequest $request) {

}
public function executeVideos(sfWebRequest $request) {


$session = $_SESSION['fbsess'];
if(!empty($session))
$session->validate();


if($session && $request->getParameter('share')) {


  try {

    $response = ( new \Facebook\FacebookRequest(
      $session, 'POST', '/me/feed', array(
        'access_token'=>$_SESSION['fbat'],
        'link' => 'http://www.jamestarleton.com/musicvideos',
        'message' => $request->getParameter('msg'),
'picture'=>'http://24.media.tumblr.com/1342c1387474e3ae73ecbcbd119be97b/tumblr_mfwb7epUnw1rdulneo1_500.jpg',
'name'=>'Selected Music Videos',
'description'=>'Please, Please, Please, Let Me Get What I Want'
      )
    ))->execute()->getGraphObject();

die(var_dump($response->getProperty('id')));

  } catch(FacebookRequestException $e) {
die(var_dump($e->getMessage()));

  }

}






}
public function executeWikipedia($request){
	$this->wikilink = Wikipedia::getLink();

$format = $request->getParameter('format', 'html');
if($format=='json'){
	header('application/json');
	echo json_encode($this->wikilink);
	exit(0);
}


}

public function executeCactus( $request ){


$session = $_SESSION['fbsess'];
if(!empty($session))
$session->validate();


if($session && $request->getParameter('share')) {


  try {

    $response = ( new \Facebook\FacebookRequest(
      $session, 'POST', '/me/feed', array(
	'access_token'=>$_SESSION['fbat'],
        'link' => 'http://www.jamestarleton.com/cactus',
        'message' => $request->getParameter('msg')
      )
    ))->execute()->getGraphObject();

die(var_dump($response->getProperty('id')));

  } catch(FacebookRequestException $e) {
die(var_dump($e->getMessage()));

  }   

}



}
public function executeFb($request){
//$this->helper = new \Facebook\FacebookRedirectLoginHelper('http://www.jamestarleton.com/fbredirect');
//$this->loginUrl = $this->helper->getLoginUrl();
}


public function executeLogout(){

$_SESSION['fbat'] = null;
$_SESSION['fbsess']= null;
$this->redirect('security/logout');
}




public function executeFbredirect($request){

//in case were visiting this page already logged in for some reason
$this->session =(!empty($_SESSION['fbsess'])) ? $_SESSION['fbsess'] : null;

$redirect_url = 'https://www.jamestarleton.com/fbredirect';
$this->helper = new \Facebook\FacebookRedirectLoginHelper($redirect_url);
$this->scopes = array('public_profile'); // basic_info, user_friends, publish_actions');
try {
if(empty($this->session))
    $this->session = $this->helper->getSessionFromRedirect();
    $request->redirect('main/index');
} 
catch(FacebookRequestException $ex) {
    $this->renderText($ex->getMessage());
} 
catch(\Exception $ex) {
$this->renderText($ex->getMessage());
    // When validation fails or other local issues
}
if (!empty($this->session)) {

$_SESSION['fbat'] = $this->session->getToken();
$_SESSION['fbsess'] = $this->session; 
  // Logged in.
$this->getUser()->setAuthenticated(true);
}

}
  public function executeMruns(){

}

public function executeArabic(){
//namespace Httpful;
//use \Httpful\Request;
die(var_dump(
class_exists('\Request')));
//require('I18N/Arabic.php');
  $this->Ar = new I18N_Arabic('Transliteration');

  $this->en_terms = array('Hello','James','computer','Bill Clinton','New York City','oranges','New York Times','Bill Gates','Chicago','Los Angeles','123,456,789, 120.50');

}
  public function executeCaptcha(){

    $_SESSION['security_number']=rand(10000,99999);

JtCaptcha::get('/var/homewww/web/images/texture.jpg', $_SESSION['security_number'])->send(); 
exit(0);

    //return sfView::NONE;
  }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
 {

   	$this->data = array('foo'); // $this->forward('default', 'module');
	//$this->setLayout('layout-ar');
	 $this->Ar = new I18N_Arabic('Transliteration');


	$this->termObjs =   Doctrine_Core::getTable('JtTerms')->findAll();


  }
  public function execute2colsleft(sfWebRequest $request){
  }
  public function executeTutorials(){

    //$this->setLayout('layout-2col-left');
  }
  public function executeTutorial1(){

    //$this->setLayout('layout-2col-left');
  }

  public function executeParse(){

    //$this->setLayout('layout-2col-left');
  }
public function executePhpbooks(){

    //$this->setLayout('layout-2col-left');
  }
  public function executeAbout(){

    //$tGhis->setLayout('layout-2col-left');
  }

/* 
  public function executeCaptcha(){ 
    //die('here');
    $helpers = array('Captcha');
    sfProjectConfiguration::getActive()->loadHelpers($helpers);
    $c = doCaptcha();
    exit('done');
  }
*/
  public function executeProjects(){



    //$this->setLayout('layout-2col-left');
  }

  public function executeScooby(){

    //$this->setLayout('layout-2col-left');
  }

  public function executeRaces(){

    //$this->setLayout('layout-2col-left');
  }
/* 
  public function executeContact(sfWebRequest $request){

    $this->form = new JtContactForm;
    $this->feedback = null;
    
    if($request->isMethod('post'))
    {
      $this->form->bind( $request->getPostParameters());
      
     
      if($this->form->isValid())
      {
        

        // The message
        $message = 'Email: '
        .$this->form['email']->getValue() 
        ."\r\n"
        . 'Date sent: '
        . date('Y-m-d H:i:s')
        ."\r\n"
        .' IP: '
        .$_SERVER['REMOTE_ADDR']
        ."\r\n"
        ."\r\n"
        .'Msg: '
        . $this->form['msg']->getValue();

        // In case any of our lines are larger than 70 characters, we should use wordwrap()
        $message = wordwrap($message, 70, "\r\n");

        $headers = 'From: www-data@sapphire.crystalbit.com' . "\r\n" .
        'Reply-To: '.$this->form['email']->getValue() . "\r\n" .
        'X-Mailer: PHP/' . phpversion();


        // Send
        $ok = mail('jamestarleton@icloud.com', 'Contact Form Submission', $message, $headers);

        $this->feedback = ($ok) ? '<p class="success">Your message has been sent.</p>' : '<p class="error">There was a problem sending your message.</p>';
        
      }
    }

    //$this->setLayout('layout-2col-left');
  }
*/

  public function executeInventory(){
$this->objs =   Doctrine_Core::getTable('Inventory')->findAll();
	
	}

}
