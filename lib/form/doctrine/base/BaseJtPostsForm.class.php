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
      'id'                    => new sfWidgetFormInputHidden(),
      'post_author'           => new sfWidgetFormInputText(),
      'post_date'             => new sfWidgetFormDateTime(),
      'post_date_gmt'         => new sfWidgetFormDateTime(),
      'post_content'          => new sfWidgetFormTextarea(),
      'post_title'            => new sfWidgetFormTextarea(),
      'post_excerpt'          => new sfWidgetFormTextarea(),
      'post_status'           => new sfWidgetFormInputText(),
      'comment_status'        => new sfWidgetFormInputText(),
      'ping_status'           => new sfWidgetFormInputText(),
      'post_password'         => new sfWidgetFormInputText(),
      'post_name'             => new sfWidgetFormInputText(),
      'to_ping'               => new sfWidgetFormTextarea(),
      'pinged'                => new sfWidgetFormTextarea(),
      'post_modified'         => new sfWidgetFormDateTime(),
      'post_modified_gmt'     => new sfWidgetFormDateTime(),
      'post_content_filtered' => new sfWidgetFormTextarea(),
      'post_parent'           => new sfWidgetFormInputText(),
      'guid'                  => new sfWidgetFormInputText(),
      'menu_order'            => new sfWidgetFormInputText(),
      'post_type'             => new sfWidgetFormInputText(),
      'post_mime_type'        => new sfWidgetFormInputText(),
      'comment_count'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                    => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'post_author'           => new sfValidatorInteger(array('required' => false)),
      'post_date'             => new sfValidatorDateTime(array('required' => false)),
      'post_date_gmt'         => new sfValidatorDateTime(array('required' => false)),
      'post_content'          => new sfValidatorString(),
      'post_title'            => new sfValidatorString(),
      'post_excerpt'          => new sfValidatorString(),
      'post_status'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'comment_status'        => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'ping_status'           => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'post_password'         => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'post_name'             => new sfValidatorString(array('max_length' => 200, 'required' => false)),
      'to_ping'               => new sfValidatorString(),
      'pinged'                => new sfValidatorString(),
      'post_modified'         => new sfValidatorDateTime(array('required' => false)),
      'post_modified_gmt'     => new sfValidatorDateTime(array('required' => false)),
      'post_content_filtered' => new sfValidatorString(),
      'post_parent'           => new sfValidatorInteger(array('required' => false)),
      'guid'                  => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'menu_order'            => new sfValidatorInteger(array('required' => false)),
      'post_type'             => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'post_mime_type'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'comment_count'         => new sfValidatorInteger(array('required' => false)),
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
