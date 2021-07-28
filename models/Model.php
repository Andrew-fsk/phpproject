<?php

class Model
{
    public $view;
    public $smarty;
    protected $db = null;

    public function __construct()
    {
        require_once( LIBS_PATH . 'Smarty.class.php');

        $this->view = new View();
        $this->smarty = new Smarty();
    }

    public function showMenu($menu_id)
    {
        $data = null;
        if ($menu_id){
            $data = DB::query("select * from `menu` where `menu_id` = " . intval($menu_id) . " and `parent_id` = 0");
            foreach ($data as &$val){
                if($val['has_children']){
                    $val['children'] =  DB::query("select * from `menu` where `menu_id` = " . intval($menu_id) . " and `parent_id` = " . $val['item_id']);
                }
            }
        }
        return $data;
    }

    public function getPageInfo($pageUrl)
    {
        $data = null;
        $data = DB::query("select * from `pages` where `page_url` = '" . $pageUrl . "'");
        return $data[0];
    }

}