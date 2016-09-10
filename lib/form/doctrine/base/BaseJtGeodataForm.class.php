<?php

/**
 * JtGeodata form base class.
 *
 * @method JtGeodata getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtGeodataForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'geoip_addr'           => new sfWidgetFormInputText(),
      'geoip_continent_code' => new sfWidgetFormInputText(),
      'geoip_country_code'   => new sfWidgetFormInputText(),
      'geoip_country_name'   => new sfWidgetFormInputText(),
      'geoip_city'           => new sfWidgetFormInputText(),
      'geoip_region'         => new sfWidgetFormInputText(),
      'geoip_region_name'    => new sfWidgetFormInputText(),
      'geoip_dma_code'       => new sfWidgetFormInputText(),
      'geoip_metro_code'     => new sfWidgetFormInputText(),
      'geoip_area_code'      => new sfWidgetFormInputText(),
      'geoip_latitude'       => new sfWidgetFormInputText(),
      'geoip_longitude'      => new sfWidgetFormInputText(),
      'created'              => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'geoip_addr'           => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_continent_code' => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_country_code'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_country_name'   => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_city'           => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_region'         => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_region_name'    => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_dma_code'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_metro_code'     => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_area_code'      => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'geoip_latitude'       => new sfValidatorNumber(array('required' => false)),
      'geoip_longitude'      => new sfValidatorNumber(array('required' => false)),
      'created'              => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_geodata[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtGeodata';
  }

}
