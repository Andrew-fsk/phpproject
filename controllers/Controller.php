<?php


class Controller
{

    public $model;
    public $view;
    protected $pageData = array();

    private $contentTpl;

    public function __construct()
    {
        $this->view = new View();
        $this->model = new Model();

        $this->pageData['menu']['1'] = $this->model->showMenu(1);
        $this->pageData['menu']['2'] = $this->model->showMenu(2);
    }

}