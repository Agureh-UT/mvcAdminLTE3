<?php

namespace App\Controllers;

use Core\Helper;
use Core\Controller;
use Core\Session;
use Core\Router;
use App\Models\Documents;
use App\Models\DocType;
use App\Models\Users;

class DocumentsController extends Controller
{

    public function __construct($controller, $action)
    {
        parent::__construct($controller, $action);
        $this->view->setLayout('default');
        $this->load_model('Documents');
    }

    public function indexAction()
    {
        $page = isset($_GET['page']) ? $_GET['page'] : 1;
        $start = ($page - 1) * LIMIT;
        $documents = $this->DocumentsModel->docHasTypeOwner($start, LIMIT);
        $this->view->documents = $documents;
        $this->view->render('documents/index');
    }

    public function addAction()
    {
        $document = new Documents();
        if ($this->request->isPost()) {
            $this->request->csrfCheck();
            $document->assign($this->request->get());
            $copy = $_FILES["doc_copy"]["name"]; // ชื่อไฟลืที่จะอัพโหลด
            $copy_ext = strtolower(pathinfo(basename($copy), PATHINFO_EXTENSION));
            $copy_tmp = $_FILES["doc_copy"]["tmp_name"];
            $copy_new = $document->doc_type . '_' . uniqid() . "." . $copy_ext;
            $copy_path = ROOT . DS . 'uploads' . DS . $document->doc_type . DS . $copy_new;
            $dir_name = ROOT . DS . 'uploads' . DS . $document->doc_type;
            if (!is_dir($dir_name)) {
                mkdir($dir_name);
            }
            Helper::uploadsFile($copy_tmp, $copy_path);
            $document->user = Users::currentUser()->id;
            $document->doc_copy = $copy_new;
            if ($document->save()) {
                Session::addMsg('success', $document->doc_title . ' has been created!');
                Router::redirect('documents/add');
            }
        }
        $documents = $this->DocumentsModel->docHasTypeOwnerIdOrder();
        $this->view->documents = $documents;
        $this->view->document = $document;
        $this->view->displayErrors = $document->getErrorMessages();
        $this->view->postAction = PROOT . 'documents' . DS . 'add';
        $this->view->render('documents/add');
    }

    public function editAction($id)
    {
        $document = $this->DocumentsModel->findById((int)$id);
        $doc_type = $document->doc_type;
        $page = @$_POST['page'];

        if (!$document)
            Router::redirect('documents/index?page=1');
        if ($this->request->isPost()) {
            $this->request->csrfCheck();
            $document->assign($this->request->get());
            $copy_new = is_uploaded_file($_FILES['doc_copy']['tmp_name']);
            if ($copy_new) {
                $copy_old = ROOT . DS . 'uploads' . DS . $doc_type . DS . $document->doc_copy;
                unlink($copy_old);
                $copy = $_FILES["doc_copy"]["name"];
                $copy_new_ext = strtolower(pathinfo(basename($copy), PATHINFO_EXTENSION));
                $copy_new_tmp = $_FILES["doc_copy"]["tmp_name"];
                $copy_new_name = $document->doc_type . '_' . uniqid() . "." . $copy_new_ext;
                $copy_new_path = ROOT . DS . 'uploads' . DS . $document->doc_type . DS . $copy_new_name;
                $dir_name = ROOT . DS . 'uploads' . DS . $document->doc_type;
                if (!is_dir($dir_name)) {
                    mkdir($dir_name);
                }
                Helper::uploadsFile($copy_new_tmp, $copy_new_path);
                $document->doc_copy = $copy_new_name;
            }
            if ($document->save()) {
                Session::addMsg('success', $document->doc_title . ' has been modified!');
                Router::redirect("documents/index?page=$page");
            }
        }
        $this->view->document = $document;
        $this->view->displayErrors = $document->getErrorMessages();
        $this->view->postAction = PROOT . 'documents' . DS . 'edit' . DS . $document->id;
        $this->view->render('documents/edit');
    }

    public function detailsAction($id)
    {
        $document = $this->DocumentsModel->docHasTypeById((int)$id);
        if (!$document) {
            Router::redirect('documents');
        }
        $this->view->document = $document;
        $this->view->render('documents/details');
    }

    public function deleteAction($id)
    {
        $document = $this->DocumentsModel->findById((int)$id);
        if ($document) {
            $document->delete();
            Session::addMsg('danger', $document->doc_title . ' has been deleted!');
        }
        Router::redirect('documents');
    }
}
