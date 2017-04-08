<?php

/**
 * JtPosts filter form base class.
 *
 * @package    jtweb
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJtPostsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'post_author'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_date'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content'  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_title'    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_status'   => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_modified' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'post_author'   => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'post_date'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'post_content'  => new sfValidatorPass(array('required' => false)),
      'post_title'    => new sfValidatorPass(array('required' => false)),
      'post_status'   => new sfValidatorPass(array('required' => false)),
      'post_modified' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('jt_posts_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JtPosts';
  }

  public function getFields()
  {
    return array(
      'id'            => 'Number',
      'post_author'   => 'Number',
      'post_date'     => 'Date',
      'post_content'  => 'Text',
      'post_title'    => 'Text',
      'post_status'   => 'Text',
      'post_modified' => 'Date',
    );
  }
}
