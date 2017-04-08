<?php

/**
 * JtLinks form base class.
 *
 * @method JtLinks getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtLinksForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'lid'    => new sfWidgetFormInputText(),
      'text'   => new sfWidgetFormInputText(),
      'url'    => new sfWidgetFormInputText(),
      'cat'    => new sfWidgetFormInputText(),
      'public' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'lid'    => new sfValidatorString(array('max_length' => 200)),
      'text'   => new sfValidatorString(array('max_length' => 200)),
      'url'    => new sfValidatorString(array('max_length' => 200)),
      'cat'    => new sfValidatorString(array('max_length' => 200)),
      'public' => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('jt_links[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtLinks';
  }

}
