<?php 
/* 

This application accepts information from the user and generates a simple "Personal Annual Report" PDF.

In addition, it includes rudimentary financial statements including Balance Sheet, Income Statement, Statement of Cash Flows, Statement of Shareholders’ Equity.


* Disclaimer: These features are intended for estimating and personal use only, and are not suitable for tax or accounting purposes.


$423.51
-
$12.68
5.00
10.00
10.00
9.47
26.40
11.98
3.80
7.02




James Tarleton's 2014 Annual Report



Financial Statements

Balance Sheet 2014 (Ending December 2014)


	
	1. Assets (Ending December 2014)
	Total Assets (Cash, Money Markets, 401K, IRA, Other Investments)
	~$25,000.

	


	2. Liabilities and Net Worth (Ending December 2014) (Credit Card Debt, Other Loans, Accounts Payable, Notes Payable)



	Total Liabilities $~17,000
	Total Net Worth ~$8,000

	Total Liabilites and Net Worth (~$25000)




	A = L + NW
	

Income Statement

	* Earnings from 1/1/2014 to 12/31/2014

	1. Revenues

		  Gross Revenues
		- Returns and Allowances
		= Net Revenues

		  Net Revenues
		- Cost of Goods Sold
		= Gross Profit (Gross Margin)

	2. Expenses

		  Gross Income
		- Operating Expenses (different from Costs of Goods Sold)  
		- Depreciation
		= Income from Operations

		  Interest Received (from Savings Accounts, Money Market Fund, etc)
		+ Gain on Sale of Assets
		+ Dividends Received
		= Income from Investments
		- Interest Paid (from CC loans, etc)
		- Loss on Sale of Assets
		= Income from Investments

		  Income from Operations
		+ Income from Investments
		= Income Before Income Tax

		  Income Before Income Tax
		- Income Tax Paid
		= Net Income 

	Earnings Per Share = Net Income / # of Shares 






Cash Flows
	
	Cash as of 1/1/2014: $327.16
	Cash as of 12/31/2014: $110.00

	Net increase or decrease in cash for the period 1/1/2014 to 12/31/2014
	1. Operating activities

	All deposits

	2. Investing activities
	Started with ~5000 in ANA 401K (in some combo of blended mutual funds, later traded for Dreyfus S&P 500 Index 
		PEOPX mutual fund)
				 ~5000 in Fidelity Rollover IRA (in Money Market)

	All 401K/IRA Deposits ~ $9000
	Received 401K Profit Sharing ~$2450
	All 401K/IRA Distributions / Trades ~$300 

	Sold AAAA Benefits "Conservative" Fund
	Sold Fidelity ANA 401K PEOPX mutual fund  
	Rolled Over Fidelity ANA 401K into existing Fidelity Rollover IRA

	Bought AAPL/AA in Fidelity IRA. Took distrubition of remaining 300 Money market cash.

	Took $1000 AAAA Benefits Loan from 401K, paid back prommisory note in full.


	3. Financing activities



Management’s Discussion and Analysis of Financial Condition and Results of Operations.







*/
class JtAnnualReportForm extends BaseForm
{
  public function configure() 
  {
    $this->setWidgets(array(
      'cash' => new sfWidgetFormInput(),
        'retirement_accts' => new sfWidgetFormInput(),
	'money_market_accts'=>new sfWidgetFormInput()
    ));
    
    $this->setValidators(array(
      'cash' => new sfValidatorNumber(array('required'=>true)),
      'retirement_accts'=>new sfValidatorNumber(array('required'=>true)),
       'money_market_accts' => new sfValidatorNumber(array('max_length' => 255, 'required' => true)),
    ));
    
    $this->widgetSchema->setLabels(array(
      'cash'=>'Cash',
      'retirement_accts' => '401K and IRA',
      'money_market_accts' => 'Money Markets'
    ));

    // I had to specify this, there wasn't any formatting by default.
    $this->widgetSchema->setFormFormatterName('table');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);
/* 
$this->validatorSchema->setPostValidator(
            new sfValidatorSchemaCompare(
                        'captcha', sfValidatorSchemaCompare::EQUAL, 'captcha',
                        array(),
                        array('invalid' => "Bad captcha answer")
    ));

    $this->validatorSchema->setPostValidator(new sfValidatorCallback(
            array('callback' => array($this,'checkCaptcha'))
    ));   
*/
 
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
