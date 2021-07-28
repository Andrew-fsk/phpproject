<?php


class Controller
{

    public $model;
    public $view;
    public $moduleUrl;
    protected $pageData = array();

    private $contentTpl;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();
        $this->moduleUrl = mb_strtolower(str_replace('Controller', '', get_class($this)));

        $this->pageData['menu']['1'] = $this->model->showMenu(1);
        $this->pageData['menu']['2'] = $this->model->showMenu(2);
    }

    public function index()
    {
        $moduleUrl = str_replace('Controller', '', get_class($this));
        $this->pageData['title'] = 'Главная страница' . get_class($this);
        $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . $moduleUrl . '/index.tpl');

        $this->view->render($this->pageData);
    }

}