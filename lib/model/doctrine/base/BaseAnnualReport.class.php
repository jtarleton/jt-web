<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('AnnualReport', 'doctrine');

/**
 * BaseAnnualReport
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $year
 * @property float $gross_earnings
 * @property float $fixed_expenses
 * @property float $total_spend
 * @property float $fed_taxes
 * @property float $state_taxes
 * @property float $city_taxes
 * @property float $retirement_savings
 * @property float $cc_balance_start
 * @property float $cc_balance_end
 * @property float $cc_balance_diff
 * 
 * @method integer      getId()                 Returns the current record's "id" value
 * @method integer      getYear()               Returns the current record's "year" value
 * @method float        getGrossEarnings()      Returns the current record's "gross_earnings" value
 * @method float        getFixedExpenses()      Returns the current record's "fixed_expenses" value
 * @method float        getTotalSpend()         Returns the current record's "total_spend" value
 * @method float        getFedTaxes()           Returns the current record's "fed_taxes" value
 * @method float        getStateTaxes()         Returns the current record's "state_taxes" value
 * @method float        getCityTaxes()          Returns the current record's "city_taxes" value
 * @method float        getRetirementSavings()  Returns the current record's "retirement_savings" value
 * @method float        getCcBalanceStart()     Returns the current record's "cc_balance_start" value
 * @method float        getCcBalanceEnd()       Returns the current record's "cc_balance_end" value
 * @method float        getCcBalanceDiff()      Returns the current record's "cc_balance_diff" value
 * @method AnnualReport setId()                 Sets the current record's "id" value
 * @method AnnualReport setYear()               Sets the current record's "year" value
 * @method AnnualReport setGrossEarnings()      Sets the current record's "gross_earnings" value
 * @method AnnualReport setFixedExpenses()      Sets the current record's "fixed_expenses" value
 * @method AnnualReport setTotalSpend()         Sets the current record's "total_spend" value
 * @method AnnualReport setFedTaxes()           Sets the current record's "fed_taxes" value
 * @method AnnualReport setStateTaxes()         Sets the current record's "state_taxes" value
 * @method AnnualReport setCityTaxes()          Sets the current record's "city_taxes" value
 * @method AnnualReport setRetirementSavings()  Sets the current record's "retirement_savings" value
 * @method AnnualReport setCcBalanceStart()     Sets the current record's "cc_balance_start" value
 * @method AnnualReport setCcBalanceEnd()       Sets the current record's "cc_balance_end" value
 * @method AnnualReport setCcBalanceDiff()      Sets the current record's "cc_balance_diff" value
 * 
 * @package    jtweb
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseAnnualReport extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('AnnualReport');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'autoincrement' => true,
             'primary' => true,
             'length' => 8,
             ));
        $this->hasColumn('year', 'integer', 4, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 4,
             ));
        $this->hasColumn('gross_earnings', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('fixed_expenses', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('total_spend', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('fed_taxes', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('state_taxes', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('city_taxes', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('retirement_savings', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cc_balance_start', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cc_balance_end', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('cc_balance_diff', 'float', null, array(
             'type' => 'float',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}