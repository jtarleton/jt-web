<?php 

class JtContactForm extends BaseForm
{
  public function configure() 
  {
    $this->setWidgets(array(
      'email' => new sfWidgetFormInput(),
        'msg' => new sfWidgetFormTextarea(),
	'captcha'=>new sfWidgetFormInput()
    ));
    
    $this->setValidators(array(
      'email' => new sfValidatorEmail(array('required'=>true)),
      'captcha'=>new sfValidatorNumber(array('required'=>true)),
       'msg' => new sfValidatorString(array('max_length' => 255, 'required' => true)),
    ));
    
    $this->widgetSchema->setLabels(array(
      'captcha'=>'Please enter the captcha',
      'email' => 'Your Email',
      'msg' => 'Your Message'
    ));

    // I had to specify this, there wasn't any formatting by default.
    $this->widgetSchema->setFormFormatterName('table');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

$this->validatorSchema->setPostValidator(
            new sfValidatorSchemaCompare(
                        'captcha', sfValidatorSchemaCompare::EQUAL, 'captcha',
                        array(),
                        array('invalid' => "Bad captcha answer")
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorCallback(
            array('callback' => array($this,'checkCaptcha'))
    ));   

 
    // Don't use $this->widgetSchema->setNameFormat()
    // unless you want to do some special parsing of $_POST data.
    // It's easier just to prefix your field names with something like
    // example_.
  }



public function checkCaptcha( $validator, $values ){
	if ($values['captcha'] != $_SESSION['security_number'])  
   throw new sfValidatorError($validator, 'Your captcha appears to be incorrect ');  
  return $values;  
}




}
