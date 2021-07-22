<?php

class UsersController extends Controller
{

    public function index()
    {
        $this->pageData['title'] = 'Пользователи';
        $this->pageData['content'] = file_get_contents(TEMPLATE_PATH . 'users/' .  'index.tpl.php');
        $this->view->render($this->pageData);
    }

    public function login()
    {
        $this->pageData['title'] = 'Вход';
        $this->pageData['content'] = file_get_contents(TEMPLATE_PATH . 'users/' .  'login.tpl.php');
        $this->view->render($this->pageData);
    }
}