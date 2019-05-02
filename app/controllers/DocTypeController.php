<?php

namespace App\Controllers;

use Core\Controller;

class DocTypeController extends Controller {

    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('DocType');
    }

    public function addTypeAction() {

        $this->view->render('doctype/addType');
    }

}
