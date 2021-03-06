<?php

class IndexController extends Controller
{
    public function index()
    {
        $this->pageData['title'] = 'Главная страница';
        $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . 'index.tpl', $this->pageData);

        $this->view->render($this->pageData);
    }

    public function textPage($pageTpl, $pageUrl)
    {
        $pageInfo = $this->model->getPageInfo($pageUrl);

        $this->pageData['title'] = $pageInfo['page_name'] ? $pageInfo['page_name'] : 'Текстовая страница';

        if($pageInfo['content']) $this->pageData['page_body'] = $pageInfo['content'];

        $this->pageData['content'] = $this->view->out($pageTpl , $this->pageData);

        $this->view->render($this->pageData);
    }


    public function errorPage()
    {
        header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");
        http_response_code(404);
        $this->pageData['title'] = 'Страница не найдена - 404';
        $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . '404.tpl');
        $this->view->render($this->pageData);
    }

}