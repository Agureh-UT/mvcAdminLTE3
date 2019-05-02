<?php
namespace App\Controllers;
use Core\Controller;

class MenuController extends Controller {

    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
    }

    public function indexAction() {
        $this->view->render('menu/index');
    }

    public function firstAction() {
        $this->view->render('menu/first');
    }

    public function secondAction() {
        $this->view->render('menu/second');
    }

    public function thirdAction() {
        $this->view->render('menu/third');
    }

}
