<?php

/**
 * JtGeodataTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JtGeodataTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JtGeodataTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JtGeodata');
    }




	public static function doIns() {



$geodata = array(


'GEOIP_ADDR'=>@$_SERVER['GEOIP_ADDR']    ,
'GEOIP_CONTINENT_CODE'=>@$_SERVER['GEOIP_CONTINENT_CODE']        ,
'GEOIP_COUNTRY_CODE'=>@$_SERVER['GEOIP_COUNTRY_CODE']    ,
'GEOIP_COUNTRY_NAME'=>@$_SERVER['GEOIP_COUNTRY_NAME']    ,
'GEOIP_REGION'=>@$_SERVER['GEOIP_REGION']        ,
'GEOIP_REGION_NAME'=>@$_SERVER['GEOIP_REGION_NAME']      ,
'GEOIP_CITY'=>@$_SERVER['GEOIP_CITY']    ,
'GEOIP_DMA_CODE'=>@$_SERVER['GEOIP_DMA_CODE'],
'GEOIP_METRO_CODE'=>@$_SERVER['GEOIP_METRO_CODE'],
'GEOIP_AREA_CODE'=>@$_SERVER['GEOIP_AREA_CODE'],
'GEOIP_LATITUDE'=>@$_SERVER['GEOIP_LATITUDE'],
'GEOIP_LONGITUDE'=>@$_SERVER['GEOIP_LONGITUDE']







        );






$obj = new JtGeodata;
foreach($geodata as $k=>$v){
$setter = strtolower($k);
$setter = 'set'.$setter;
$setter = str_replace(' ','',$setter);
$obj->$setter($v);
}

$obj->save();















		}

}
