<?php

namespace App\Models;

use Core\Helper;
use Core\Model;
use Core\Validators\RequiredValidator;
use Core\Validators\MaxValidator;

class Documents extends Model {

    public $id, $doc_title, $doc_type, $doc_copy, $doc_own, $deleted = 0;

    public function __construct() {
        $table = 'documents';
        parent::__construct($table);
        $this->_softDelete = true; // set deleted to 0, if false -> deleted row from table
    }

    public function validator() {
        $this->runValidation(new RequiredValidator($this, ['field' => 'doc_title', 'msg' => 'Document Title is required!']));
        $this->runValidation(new RequiredValidator($this, ['field' => 'doc_type', 'msg' => 'Document Type is required!']));
        $this->runValidation(new RequiredValidator($this, ['field' => 'doc_own', 'msg' => 'Document Owner is required!']));
        //  $this->runValidation(new RequiredValidator($this, ['field' => 'doc_copy', 'msg' => 'Copy of Document is required!']));
    }

    public function findAll() {
        return $this->find();
    }

    public function findById($id, $params = []) {
        $conditions = [
            'conditions' => 'id = ?',
            'bind' => [$id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }

    public function docHasType() {
        $sql = "SELECT documents.id,documents.doc_title,documents.doc_copy,doc_type.doc_type,doc_type.id as type_id "
                . "FROM documents INNER JOIN doc_type ON documents.doc_type = doc_type.id "
                . "WHERE documents.deleted != 1 ORDER BY doc_type.doc_type,documents.doc_title";
        $data = $this->query($sql)->results();
        return $data;
    }

    public function getRows() {
        return count($this->docHasType());
    }

    public function docHasTypeOwner($start,$limit) {
        $sql = "SELECT doc.id,doc.doc_title,doc.doc_copy,own.fname,own.id AS own_id,type.doc_type,type.id AS type_id "
                . "FROM documents AS doc INNER JOIN doc_type AS type ON (doc.doc_type = type.id) "
                . "INNER JOIN doc_owner AS own ON (doc.doc_own = own.id)"
                . "WHERE doc.deleted != 1 ORDER BY own.id,type.id,doc.doc_title LIMIT $start, $limit";
        $data = $this->query($sql)->results();
        return $data;
    }

    public function docHasTypeOwnerIdOrder() {
        $sql = "SELECT doc.id,doc.doc_title,doc.doc_copy,own.fname,own.id AS own_id,type.doc_type,type.id AS type_id "
                . "FROM documents AS doc INNER JOIN doc_type AS type ON (doc.doc_type = type.id) "
                . "INNER JOIN doc_owner AS own ON (doc.doc_own = own.id)"
                . "WHERE doc.deleted != 1 ORDER BY doc.id DESC LIMIT 3";
        $data = $this->query($sql)->results();
        return $data;
    }

    public function docHasTypeById($id) {
        $sql = "SELECT doc.id,doc.doc_title,doc_type.doc_type,doc.doc_copy,doc_type.id as type_id,own.fname,own.lname,own.id AS own_id,u.full_name,u.id AS user_id "
                . "FROM documents AS doc INNER JOIN doc_type ON (doc.doc_type = doc_type.id)"
                . "INNER JOIN doc_owner AS own ON (doc.doc_own = own.id)"
                . "INNER JOIN users AS u ON (doc.user = u.id)"
                . "WHERE doc.deleted != 1 AND doc.id = $id";
        $data = $this->query($sql)->results();
        foreach ($data as $value) {
            return $value;
        }
        return false;
    }

    public function findByIdAndUserId($contact_id, $user_id, $params = []) {
        $conditions = [
            'conditions' => 'id = ? AND user_id = ?',
            'bind' => [$contact_id, $user_id]
        ];
        $conditions = array_merge($conditions, $params);
        return $this->findFirst($conditions);
    }

}
