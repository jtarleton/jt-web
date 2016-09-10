<?php

/**
 * JtTermTaxonomy form base class.
 *
 * @method JtTermTaxonomy getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtTermTaxonomyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_taxonomy_id' => new sfWidgetFormInputHidden(),
      'term_id'          => new sfWidgetFormInputText(),
      'taxonomy'         => new sfWidgetFormInputText(),
      'description'      => new sfWidgetFormTextarea(),
      'parent'           => new sfWidgetFormInputText(),
      'count'            => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'term_taxonomy_id' => new sfValidatorChoice(array('choices' => array($this->getObject()->get('term_taxonomy_id')), 'empty_value' => $this->getObject()->get('term_taxonomy_id'), 'required' => false)),
      'term_id'          => new sfValidatorInteger(array('required' => false)),
      'taxonomy'         => new sfValidatorString(array('max_length' => 32, 'required' => false)),
      'description'      => new sfValidatorString(),
      'parent'           => new sfValidatorInteger(array('required' => false)),
      'count'            => new sfValidatorInteger(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_term_taxonomy[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtTermTaxonomy';
  }

}
