<?php

/**
 * JtLinksTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JtLinksTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JtLinksTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JtLinks');
    }

	public static function getAllByCat($cat) {

$vals=Doctrine_Core::getTable('JtLinks')->findBy('cat',$cat);
return $vals;








	}

    public static function doIns($row) {
	
	
$obj = new JtLinks;
foreach($row as $k=>$v){
if($k=='_id') $k = 'id';
$setter = 'set'.ucwords($k);
$setter = str_replace(' ','',$setter);
$obj->$setter($v);
  }

$obj->save();

	

	
	

	}
}
