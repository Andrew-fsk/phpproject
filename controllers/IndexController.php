<?php

class IndexController extends Controller
{
    public $menu;

    public function __construct()
    {
        $this->model = new IndexModel();
        $this->view = new View();
    }

    public function index()
    {
        $this->pageData['title'] = 'Главная страница';
        $this->pageData['menu']['1'] = $this->model->showMenu(1);
        $this->pageData['menu']['2'] = $this->model->showMenu(2);
        $this->pageData['content'] = file_get_contents(TEMPLATE_PATH . 'index.tpl');

        $this->view->render($this->pageData);
    }

    public function textPage($pageTpl)
    {
        $this->pageData['title'] = 'Текстовая страница';
        $this->pageData['content'] = file_get_contents($pageTpl);
        $this->view->render($this->pageData);
    }


    public function errorPage()
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        http_response_code(404);
        $this->pageData['title'] = 'Страница не найдена - 404';
        $this->pageData['content'] = file_get_contents('404.tpl');
        $this->view->render($this->pageData);
    }

}