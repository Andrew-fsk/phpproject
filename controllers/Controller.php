<?php


class Controller
{

    public $model;
    public $view;
    public $moduleUrl;
    protected $pageData = array();

    public function __construct()
    {
        $this->view = new View();

        $this->moduleUrl = mb_strtolower(str_replace('Controller', '', get_class($this)));
        $modelName = ucfirst($this->moduleUrl) . "Model";
        $this->model = new $modelName;

        $this->pageData['menu']['1'] = $this->model->showMenu(1);
        $this->pageData['menu']['2'] = $this->model->showMenu(2);

    }

    public function index()
    {
        $this->pageData['title'] = 'Главная страница' . $this->moduleUrl;
        $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . $this->moduleUrl . '/index.tpl');

        $this->view->render($this->pageData);
    }

}