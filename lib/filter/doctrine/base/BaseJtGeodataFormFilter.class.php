<?php

/**
 * JtGeodata filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtGeodataFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'geoip_addr'           => new sfWidgetFormFilterInput(),
      'geoip_continent_code' => new sfWidgetFormFilterInput(),
      'geoip_country_code'   => new sfWidgetFormFilterInput(),
      'geoip_country_name'   => new sfWidgetFormFilterInput(),
      'geoip_city'           => new sfWidgetFormFilterInput(),
      'geoip_region'         => new sfWidgetFormFilterInput(),
      'geoip_region_name'    => new sfWidgetFormFilterInput(),
      'geoip_dma_code'       => new sfWidgetFormFilterInput(),
      'geoip_metro_code'     => new sfWidgetFormFilterInput(),
      'geoip_area_code'      => new sfWidgetFormFilterInput(),
      'geoip_latitude'       => new sfWidgetFormFilterInput(),
      'geoip_longitude'      => new sfWidgetFormFilterInput(),
      'created'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'geoip_addr'           => new sfValidatorPass(array('required' => false)),
      'geoip_continent_code' => new sfValidatorPass(array('required' => false)),
      'geoip_country_code'   => new sfValidatorPass(array('required' => false)),
      'geoip_country_name'   => new sfValidatorPass(array('required' => false)),
      'geoip_city'           => new sfValidatorPass(array('required' => false)),
      'geoip_region'         => new sfValidatorPass(array('required' => false)),
      'geoip_region_name'    => new sfValidatorPass(array('required' => false)),
      'geoip_dma_code'       => new sfValidatorPass(array('required' => false)),
      'geoip_metro_code'     => new sfValidatorPass(array('required' => false)),
      'geoip_area_code'      => new sfValidatorPass(array('required' => false)),
      'geoip_latitude'       => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'geoip_longitude'      => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'created'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('jt_geodata_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtGeodata';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'geoip_addr'           => 'Text',
      'geoip_continent_code' => 'Text',
      'geoip_country_code'   => 'Text',
      'geoip_country_name'   => 'Text',
      'geoip_city'           => 'Text',
      'geoip_region'         => 'Text',
      'geoip_region_name'    => 'Text',
      'geoip_dma_code'       => 'Text',
      'geoip_metro_code'     => 'Text',
      'geoip_area_code'      => 'Text',
      'geoip_latitude'       => 'Number',
      'geoip_longitude'      => 'Number',
      'created'              => 'Date',
    );
  }
}
