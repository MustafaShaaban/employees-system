<?php
namespace PHPMVC\CONTROLLERS;
use PHPMVC\LIB\Helper;
use PHPMVC\MODELS\EmployeeModel;

class EmployeeController extends AbstractClass
{
    use Helper;

    // Default Action
    public function defaultAction()
    {
        $this->_data['employee'] = EmployeeModel::getAll();
        $this->_view();
    }

    // Add Action
    public function addAction()
    {
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $emp = new EmployeeModel();
            $emp->setFirstName($_POST['firstName']);
            $emp->setLastName($_POST['lastName']);
            $emp->setAddress($_POST['address']);
            $emp->setGender($_POST['gender']);
            $emp->setAge($_POST['age']);
            $emp->setjobTitle($_POST['position']);
            $emp->setjobStatus($_POST['jobStatus']);
            $emp->setComputerSkills($_POST['computerSkills']);
            $emp->setSalary($_POST['salary']);
            $emp->setTax($_POST['tax']);
            $emp->setNotes($_POST['notes']);
            if($emp->create()) {
                $_SESSION['Message'] = 'The ' . $emp->firstName . ' has been inserted succesfully';
                $this->redirect('/employee');
            }
        }
        $this->_view();
    }

    // Edit Action
    public function editAction()
    {
        $ID = (is_numeric($this->_params[0])) ? intval($this->_params[0]) : 0;
        $this->_data['employee'] = EmployeeModel::getByPK($ID);
        $this->_data['employee']->skill = explode(',', $this->_data['employee']->computerSkills);
        if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == 'POST') {
            $emp = new EmployeeModel();
            $ID = $this->_data['employee']->ID;
            $emp->setID($ID);
            $emp->setFirstName($_POST['firstName']);
            $emp->setLastName($_POST['lastName']);
            $emp->setAddress($_POST['address']);
            $emp->setGender($_POST['gender']);
            $emp->setAge($_POST['age']);
            $emp->setjobTitle($_POST['position']);
            $emp->setjobStatus($_POST['jobStatus']);
            $emp->setComputerSkills($_POST['computerSkills']);
            $emp->setSalary($_POST['salary']);
            $emp->setTax($_POST['tax']);
            $emp->setNotes($_POST['notes']);
            $emp->update();
            if($emp->update()) {
                $_SESSION['Message'] = 'The ' . $emp->firstName . ' has been Updated successfully';
                $this->redirect('/employee');
            }
        }
        $this->_view();
    }

    // Delete Action
    public function deleteAction()
    {
        $emp = new EmployeeModel();
        $ID = (is_numeric($this->_params[0])) ? intval($this->_params[0]) : 0;
        $emp->delete($ID);
        if($emp->delete($ID)) {
            $_SESSION['Message'] = 'The ' . $emp->firstName . ' has been Deleted succesfully';
            $this->redirect('/employee');
        }

    }

    // View profile Action
    public function profileAction()
    {
        $this->_data['employee'] = EmployeeModel::getAll();
        $this->_view();
    }
}
