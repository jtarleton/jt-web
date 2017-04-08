<?php

/**
 * JtLinks filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtLinksFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'lid'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'text'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'url'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'cat'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'public' => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'lid'    => new sfValidatorPass(array('required' => false)),
      'text'   => new sfValidatorPass(array('required' => false)),
      'url'    => new sfValidatorPass(array('required' => false)),
      'cat'    => new sfValidatorPass(array('required' => false)),
      'public' => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_links_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtLinks';
  }

  public function getFields()
  {
    return array(
      'id'     => 'Number',
      'lid'    => 'Text',
      'text'   => 'Text',
      'url'    => 'Text',
      'cat'    => 'Text',
      'public' => 'Text',
    );
  }
}
