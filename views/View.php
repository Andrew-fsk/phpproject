<?php

class View
{

    public function render($data)
    {
        require_once( LIBS_PATH . 'Smarty.class.php');
        $smarty = new Smarty();

        $smarty->assign('data', $data);
        $smarty->display(TEMPLATE_PATH.'base.tpl');
    }

}