<?php

/**
 * JtQuotes filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtQuotesFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'text'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'source' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'link'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'text'   => new sfValidatorPass(array('required' => false)),
      'source' => new sfValidatorPass(array('required' => false)),
      'link'   => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_quotes_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtQuotes';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'text'   => 'Text',
      'source' => 'Text',
      'link'   => 'Text',
    );
  }
}
