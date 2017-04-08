<?php

/**
 * JtPosts form base class.
 *
 * @method JtPosts getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtPostsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'            => new sfWidgetFormInputHidden(),
      'post_author'   => new sfWidgetFormInputText(),
      'post_date'     => new sfWidgetFormDateTime(),
      'post_content'  => new sfWidgetFormTextarea(),
      'post_title'    => new sfWidgetFormTextarea(),
      'post_status'   => new sfWidgetFormInputText(),
      'post_modified' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'            => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'post_author'   => new sfValidatorInteger(array('required' => false)),
      'post_date'     => new sfValidatorDateTime(array('required' => false)),
      'post_content'  => new sfValidatorString(),
      'post_title'    => new sfValidatorString(),
      'post_status'   => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'post_modified' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_posts[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtPosts';
  }

}
