<?php

namespace App\Models;

use Core\Model;

class DocOwner extends Model {

    public $id, $fname, $lname;

    public function __construct() {
        $table = 'doc_owner';
        parent::__construct($table);
    }

    public function findAll() {
        return $this->find();
    }

}
