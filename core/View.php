<?php
namespace Core;

class View {

    protected $_head, $_body, $_site_title = SITE_TITLE, $_output_buffer, $_layout = DEFAULT_LAYOUT;

    public function __construct() {

    }

    public function render($view_name) {
        $view_ary = explode('/', $view_name);
        $view_str = implode(DS, $view_ary);
        if (file_exists(ROOT . DS . 'app' . DS . 'views' . DS . $view_str . '.php')) {
            include(ROOT . DS . 'app' . DS . 'views' . DS . $view_str . '.php');
            include(ROOT . DS . 'app' . DS . 'views' . DS . 'layouts' . DS . $this->_layout . '.php');
        } else {
            die('No view ' . $view_name);
        }
    }

    public function content($type) {
        if ($type == 'head') {
            return $this->_head;
        } elseif ($type == 'body') {
            return $this->_body;
        }
        return false;
    }

    public function start($type) {
        $this->_output_buffer = $type;
        ob_start();
    }

    public function end() {
        if ($this->_output_buffer == 'head') {
            $this->_head = ob_get_clean();
        } elseif ($this->_output_buffer == 'body') {
            $this->_body = ob_get_clean();
        } else {
            die('You must first run the start method.');
        }
    }

    public function siteTitle() {
        return $this->_site_title;
    }

    public function setSiteTitle($title) {
        $this->_site_title = $title;
    }

    public function setLayout($path) {
        $this->_layout = $path;
    }

    public function insert($path) {
        include ROOT . DS . 'app' . DS . 'views' . DS . $path . '.php';
    }

    public function partial($group, $partial) {
        include ROOT . DS . 'app' . DS . 'views' . DS . $group . DS . 'partials' . DS . $partial . '.php';
        //dnd($path);
    }

}
