<?php

/**
 * JtUsers form base class.
 *
 * @method JtUsers getObject() Returns the current form's model object
 *
 * @package    jtweb
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJtUsersForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'fbid'         => new sfWidgetFormInputText(),
      'username'     => new sfWidgetFormInputText(),
      'password'     => new sfWidgetFormInputText(),
      'email'        => new sfWidgetFormInputText(),
      'city_id'      => new sfWidgetFormInputText(),
      'last_login'   => new sfWidgetFormDateTime(),
      'created'      => new sfWidgetFormDateTime(),
      'last_updated' => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'fbid'         => new sfValidatorString(array('max_length' => 250)),
      'username'     => new sfValidatorString(array('max_length' => 250)),
      'password'     => new sfValidatorString(array('max_length' => 250)),
      'email'        => new sfValidatorString(array('max_length' => 250)),
      'city_id'      => new sfValidatorString(array('max_length' => 250)),
      'last_login'   => new sfValidatorDateTime(),
      'created'      => new sfValidatorDateTime(),
      'last_updated' => new sfValidatorDateTime(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('jt_users[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtUsers';
  }

}
