<?php

/**
 * Test2 filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseTest2FormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'    => new sfWidgetFormFilterInput(),
      'descr' => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'id'    => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'descr' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('test2_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Test2';
  }

  public function getFields()
  {
    return array(
      'id'    => 'Number',
      'descr' => 'Text',
    );
  }
}
