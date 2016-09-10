<?php

/**
 * JtTermTaxonomy filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtTermTaxonomyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'term_id'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'taxonomy'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'description'      => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'parent'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'count'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'term_id'          => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'taxonomy'         => new sfValidatorPass(array('required' => false)),
      'description'      => new sfValidatorPass(array('required' => false)),
      'parent'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'count'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
    ));

    $this->widgetSchema->setNameFormat('jt_term_taxonomy_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtTermTaxonomy';
  }

  public function getFields()
  {
    return array(
      'term_taxonomy_id' => 'Number',
      'term_id'          => 'Number',
      'taxonomy'         => 'Text',
      'description'      => 'Text',
      'parent'           => 'Number',
      'count'            => 'Number',
    );
  }
}
