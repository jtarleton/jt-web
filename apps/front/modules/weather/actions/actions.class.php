<?php

/**
 * weather actions.
 *
 * @package    jtweb
 * @subpackage weather
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class weatherActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
	sfProjectConfiguration::getActive()->loadHelpers('Date');



$begin = '2016-09-01';
$end = '2016-09-07';

$given = new DateTime($begin, new DateTimeZone('America/New_York'));
$given->setTimezone(new DateTimeZone('UTC'));
$beginUTC = $given->format('Y-m-d'); 

$given = new DateTime($end, new DateTimeZone('America/New_York'));
$given->setTimezone(new DateTimeZone('UTC'));
$endUTC = $given->format('Y-m-d'); 


$get = array('product'=>'time-series',
    'begin'=>$beginUTC,
    'end'=>$endUTC, // UTC
'lat'=>40.71297,
'lon'=>-74.00367,
'maxt'=>'maxt',
'mint'=>'mint',
    );






$r=date_range($begin, $end);




$url = 'http://graphical.weather.gov/xml/sample_products/browser_interface/ndfdXMLclient.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url . (strpos($url, '?') === FALSE ? '?' : ''). http_build_query($get) );
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

if( ! $curl_resp = curl_exec($ch))
    {
        trigger_error(curl_error($ch));
    } 
curl_close($ch);
/* 
$xml = simplexml_load_string(trim($curl_resp));

//$blocks  = $xml->xpath('//block'); //gets all <block/> tags
$b = $xml->xpath('//parameters/temperature'); //gets all <block/> which parent are   <layout/>  tags


*/
$type=0;
$b = array();
foreach($b as $obj){

    /* 
        [@attributes] => Array
        (
            [type] => maximum
            [units] => Fahrenheit
            [time-layout] => k-p24h-n7-1
        )

    [name] => Daily Maximum Temperature
    [value] => Array
        (
            [0] => 72
            [1] => 72
            [2] => 73
            [3] => 75
            [4] => 78
            [5] => 81
            [6] => 84
    */
            $out = array();
 
//        foreach($obj->value as $v){
  //          $temps[$obj->name->__toString()][] = $v->__toString(); //->value;
    //    }
      

}
$ind = 0;
$temps = array();
$results = array();
if(count(@$temps['Daily Minimum Temperature'])){
foreach(@$temps['Daily Minimum Temperature'] as $temp){

 //   @$results['low_temp'][  @$r[$ind] ] = $temp; 
    $ind++;
} 
}
$r = array();
$ind = 0;
for($ind = 0; $ind < count(@$results['low_temp']);$ind++){

 //   @$results['high_temp'][  @$r[$ind] ] = $temps['Daily Maximum Temperature'][$ind]; 
    
}
$this->final = array();
foreach($r as $date) {
    if( !empty($results['high_temp'][$date]) && !empty($results['high_temp'][$date]) )
    $this->final[$date] = array('high_temp'=>$results['high_temp'][$date],
        'low_temp'=>$results['low_temp'][$date],
        );
}


  }
}
