<?php

/**
 * JtQuotes form base class.
 *
 * @method JtQuotes getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtQuotesForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'     => new sfWidgetFormInputHidden(),
      'text'   => new sfWidgetFormTextarea(),
      'source' => new sfWidgetFormInputText(),
      'link'   => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'     => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'text'   => new sfValidatorString(),
      'source' => new sfValidatorString(array('max_length' => 200)),
      'link'   => new sfValidatorString(array('max_length' => 200)),
    ));

    $this->widgetSchema->setNameFormat('jt_quotes[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtQuotes';
  }

}
