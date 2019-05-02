<?php

namespace App\Models;

use Core\Model;

class DocType extends Model {

    public $id, $doc_type;

    public function __construct() {
        $table = 'doc_type';
        parent::__construct($table);
    }

    public function validator() {
        $this->runValidation(new RequiredValidator($this, ['field' => 'doc_type', 'msg' => 'Document Type is required!']));
    }
    public function findAll() {
        return $this->find();
    }

}
