<?php

namespace App\Models;

use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\UniqueValidator;

class Contacts extends Model {

    public $id, $user_id, $fname, $lname, $email, $address, $address2, $city, $state, $zip;
    public $office, $cell_phone, $work_phone, $deleted = 0;

    public function __construct() {
        $table = 'contacts';
        parent::__construct($table);
        $this->_softDelete = true; // set deleted to 0, if false -> deleted row from table
    }

    public function validator() {
        $this->runValidation(new RequiredValidator($this, ['field' => 'fname', 'msg' => 'First name is required!']));
        $this->runValidation(new RequiredValidator($this, ['field' => 'lname', 'msg' => 'Last name is required!']));
        //$this->runValidation(new UniqueValidator($this,['field'=>'email','msg'=>'This Email already exists!']));
        //$this->runValidation(new RequiredValidator($this, ['field' => 'email', 'msg' => 'Email is required!']));
        $this->runValidation(new RequiredValidator($this, ['field' => 'cell_phone', 'msg' => 'Cell Phone is required!']));
    }

    public function findAll() {
        return $this->find();
    }

    public function findAllByUserId($user_id, $params = []) {
        $conditions = [
            'conditions' => 'user_id =?',
            'bind' => [$user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->find($conditions);
    }

    public function getRows($user_id) {
        return count($this->findAllByUserId($user_id, $params = []));
    }

    public function findByIdAndUserId($contact_id, $user_id, $params = []) {
        $conditions = [
            'conditions' => 'id = ? AND user_id = ?',
            'bind' => [$contact_id, $user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }

    public function displayName() {
        return $this->fname . ' ' . $this->lname;
    }

    public function displayAddress() {
        $address = '';
        if (!empty($this->address)) {
            $address .= $this->address . '<br>';
        }
        if (!empty($this->address2)) {
            $address .= $this->address2 . '<br>';
        }
        if (!empty($this->city)) {
            $address .= $this->city . ', ';
        }
        $address .= $this->state . ' ' . $this->zip . '<br>';
        return $address;
    }

    public function displayAddressLabel() {
        $html = $this->displayName() . '<br />';
        $html .= $this->displayAddress();
        return $html;
    }

}
