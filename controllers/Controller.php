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
    }

    public function exec($module, $action, $params = null, $get = null, $show_login_page = false)
    {
        // установка $_GET параметров при вызове через modexec c шаблона
        if ($get) {
            $_GET = array_merge($_GET, $get);
            $_REQUEST = array_merge($_REQUEST, $get);
        }

        // преобразование 'module_module' в 'ModuleModule'
        $module = str_replace(' ', '', mb_convert_case(str_replace('_', ' ', $module), MB_CASE_TITLE));
        // преобразование 'action_action' в 'actionAction'
        $action = lcfirst(str_replace(' ', '', mb_convert_case(str_replace('_', ' ', $action), MB_CASE_TITLE)));

        if ($this->_modules[$module]) {
            if ($module::ifAllowed($action)) {
                $c = new $module();
                $action = "action_" . $action;
                $result = $c->$action($params);
                if ($get) {
                    $_GET = array_diff_key($_GET, $get);
                    $_REQUEST = array_diff_key($_GET, $get);
                }
                return $result;
            } else {
                throw new Exception($this->_modules[$module]['title'], 403);
            }
        }
        throw new Exception(_('Страница не найденна'), 404);
    }
}