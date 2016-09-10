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
      'post_author'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_date'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_date_gmt'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_title'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_excerpt'          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_status'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_status'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'ping_status'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_password'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_name'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'to_ping'               => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pinged'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_modified'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_modified_gmt'     => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'post_content_filtered' => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_parent'           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'guid'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'menu_order'            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_type'             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'post_mime_type'        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'comment_count'         => new sfWidgetFormFilterInput(array('with_empty' => false)),
    ));

    $this->setValidators(array(
      'post_author'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'post_date'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'post_date_gmt'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'post_content'          => new sfValidatorPass(array('required' => false)),
      'post_title'            => new sfValidatorPass(array('required' => false)),
      'post_excerpt'          => new sfValidatorPass(array('required' => false)),
      'post_status'           => new sfValidatorPass(array('required' => false)),
      'comment_status'        => new sfValidatorPass(array('required' => false)),
      'ping_status'           => new sfValidatorPass(array('required' => false)),
      'post_password'         => new sfValidatorPass(array('required' => false)),
      'post_name'             => new sfValidatorPass(array('required' => false)),
      'to_ping'               => new sfValidatorPass(array('required' => false)),
      'pinged'                => new sfValidatorPass(array('required' => false)),
      'post_modified'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'post_modified_gmt'     => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'post_content_filtered' => new sfValidatorPass(array('required' => false)),
      'post_parent'           => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'guid'                  => new sfValidatorPass(array('required' => false)),
      'menu_order'            => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
      'post_type'             => new sfValidatorPass(array('required' => false)),
      'post_mime_type'        => new sfValidatorPass(array('required' => false)),
      'comment_count'         => new sfValidatorSchemaFilter('text', new sfValidatorInteger(array('required' => false))),
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
      'id'                    => 'Number',
      'post_author'           => 'Number',
      'post_date'             => 'Date',
      'post_date_gmt'         => 'Date',
      'post_content'          => 'Text',
      'post_title'            => 'Text',
      'post_excerpt'          => 'Text',
      'post_status'           => 'Text',
      'comment_status'        => 'Text',
      'ping_status'           => 'Text',
      'post_password'         => 'Text',
      'post_name'             => 'Text',
      'to_ping'               => 'Text',
      'pinged'                => 'Text',
      'post_modified'         => 'Date',
      'post_modified_gmt'     => 'Date',
      'post_content_filtered' => 'Text',
      'post_parent'           => 'Number',
      'guid'                  => 'Text',
      'menu_order'            => 'Number',
      'post_type'             => 'Text',
      'post_mime_type'        => 'Text',
      'comment_count'         => 'Number',
    );
  }
}
