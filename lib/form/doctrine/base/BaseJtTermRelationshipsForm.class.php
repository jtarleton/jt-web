<?php

/**
 * JtTermRelationships form base class.
 *
 * @method JtTermRelationships getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtTermRelationshipsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'object_id'        => new sfWidgetFormInputHidden(),
      'term_taxonomy_id' => new sfWidgetFormInputHidden(),
      'term_order'       => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'object_id'        => new sfValidatorChoice(array('choices' => array($this->getObject()->get('object_id')), 'empty_value' => $this->getObject()->get('object_id'), 'required' => false)),
      'term_taxonomy_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('term_taxonomy_id')), 'empty_value' => $this->getObject()->get('term_taxonomy_id'), 'required' => false)),
      'term_order'       => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_term_relationships[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtTermRelationships';
  }

}
