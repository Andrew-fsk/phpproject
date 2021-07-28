<?php

class BlogController extends Controller
{

    public function index()
    {
        $this->pageData['title'] = 'Блог';
        $this->pageData['items'] = $this->model->getItemsData();

        $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . $this->moduleUrl . '/index.tpl' , $this->pageData);

        $this->view->render($this->pageData);
    }

    public function showItem($itemUrl)
    {
        $itemIdPos = stripos($itemUrl,'-');
        if($itemIdPos && $this->model->getItemData(substr($itemUrl,0, $itemIdPos) , $itemUrl) != null){
            $itemData = $this->model->getItemData(substr($itemUrl,0, $itemIdPos) , $itemUrl);

            $this->pageData['title'] = $itemData['title'];
            $this->pageData['item_content'] = $itemData['content'];
            $this->pageData['url'] = $itemData['url'];
            $this->pageData['post_time'] = $itemData['post_time'];

            $this->pageData['content'] = $this->view->out(TEMPLATE_PATH . $this->moduleUrl . '/item.tpl' , $this->pageData);

            $this->view->render($this->pageData);
        } else {
            Routing::errorPage();
        }

    }

}