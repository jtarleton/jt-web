<?php

/**
 * JtTerms form base class.
 *
 * @method JtTerms getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtTermsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'    => new sfWidgetFormInputHidden(),
      'name'       => new sfWidgetFormInputText(),
      'slug'       => new sfWidgetFormInputText(),
      'term_group' => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'term_id'    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('term_id')), 'empty_value' => $this->getObject()->get('term_id'), 'required' => false)),
      'name'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'slug'       => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'term_group' => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_terms[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtTerms';
  }

}
