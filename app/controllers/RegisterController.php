<?php

namespace App\Controllers;

use Core\Controller;
use Core\Router;
use Core\Session;
use App\Models\Users;
use App\Models\Login;

class RegisterController extends Controller {

    public function __construct($controller, $action) {
        parent::__construct($controller, $action);
        $this->load_model('Users');
    }

    public function loginAction() {
        $this->view->setLayout('login');
        $loginModel = new Login();
        if ($this->request->isPost()) {
            $this->request->csrfCheck();
            $loginModel->assign($this->request->get());
            $loginModel->validator();
            if ($loginModel->validationPassed()) {
                $username = filter_input(INPUT_POST, 'username');
                $user = $this->UsersModel->findByUsername($username);
                if ($user && password_verify($this->request->get('password'), $user->password)) {
                    $remember = $loginModel->getRememberMeChecked();
                    $user->login($remember);
                    $name = Users::currentUser()->full_name;
                    Session::addMsg('success', "ยินดีต้อนรับคุณ<strong>$name</strong>");
                    Router::redirect('home/dashboard1');
                } else {
                    $loginModel->addErrorMessage('username', 'Username or Password Invalid');
                }
            }
        }
        $this->view->Login = $loginModel;
        $this->view->displayErrors = $loginModel->getErrorMessages();
        $this->view->render('register/login');
    }

    public function logoutAction() {
        if (Users::currentUser()) {
            Users::currentUser()->logout();
        }
        Session::addMsg('warning', "คุณออกจากระบบเรียบร้อยแล้ว");
        Router::redirect('home/dashboard1');
    }

    public function registerAction() {
        $this->view->setLayout('login');
        $newUser = new Users();
        if ($this->request->isPost()) {
            $this->request->csrfCheck();
            $newUser->assign($this->request->get());
            $newUser->setConfirm($this->request->get('confirm'));
            if ($newUser->save()) {
                Router::redirect('register/login');
            }
        }

        $this->view->newUser = $newUser;
        $this->view->displayErrors = $newUser->getErrorMessages();
        $this->view->render('register/register');
    }

    public function login2Action() {
        $this->view->render('register/login2');
    }

}
