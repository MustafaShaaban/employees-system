<?php
namespace PHPMVC\MODELS;
use PHPMVC\LIB\FilterInp;

class EmployeeModel extends DatabaseModel
{
    use FilterInp;

    private $ID;
    private $firstName;
    private $lastName;
    private $address;
    private $gender;
    private $age;
    private $jobTitle;
    private $jobStatus;
    private $computerSkills;
    private $salary;
    private $tax;
    private $notes;


    // abstract
    protected static $tableName = 'employee';
    protected static $tableSchema = array(
        'ID'                => self::DATA_TYPE_INT,
        'firstName'         => self::DATA_TYPE_STR,
        'lastName'          => self::DATA_TYPE_STR,
        'address'           => self::DATA_TYPE_STR,
        'gender'            => self::DATA_TYPE_INT,
        'age'               => self::DATA_TYPE_INT,
        'jobTitle'          => self::DATA_TYPE_STR,
        'jobStatus'         => self::DATA_TYPE_INT,
        'computerSkills'    => self::DATA_TYPE_STR,
        'salary'            => self::DATA_TYPE_INT,
        'tax'               => self::DATA_TYPE_INT,
        'notes'             => self::DATA_TYPE_STR,
    );
    protected static $primaryKey = "ID";

    // Set Data
    public function setID($var) {
        $this->ID = $this->filterNumber($var);
    }
    public function setFirstName($var) {
        $this->firstName = $this->filterStrings($var);
    }
    public function setLastName($var) {
        $this->lastName = $this->filterStrings($var);
    }
    public function setAddress($var) {
        $this->address = $this->filterStrings($var);
    }
    public function setGender($var) {
        $this->gender = abs($this->filterNumber($var));
    }
    public function setAge($var) {
        $this->age = abs($this->filterNumber($var));
    }
    public function setjobTitle($var) {
        $this->jobTitle = $this->filterStrings($var);
    }
    public function setjobStatus($var) {
        $this->jobStatus = $this->filterNumber($var);
    }
    public function setComputerSkills($var) {
        $skills = [];
        foreach ($var as $skill) {
            $skills[] = $this->filterNumber($skill);
        }
        $this->computerSkills = implode(',', $skills);
    }
    public function setSalary($var) {
        $this->salary = abs($this->filterNumber($var));
    }
    public function setTax($var) {
        $this->tax = $this->filterNumber($var);
    }
    public function setNotes($var) {
        $this->notes = $this->filterStrings($var);
    }


    public function calcSalary() {
        return $this->salary - ($this->salary * $this->tax) / 100;
    }


    // Get Data
    public function __get($prop) {
        return $this->$prop;
    }

}
