<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{

    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
    }

    public function indexAction()
    {
        $this->view->render('home/dashboard1');
    }

    public function dashboard1Action()
    {
        $this->view->render('home/dashboard1');
    }

    public function dashboard2Action()
    {
        $this->view->render('home/dashboard2');
    }

    public function dashboard3Action()
    {
        $this->view->render('home/dashboard3');
    }

}
