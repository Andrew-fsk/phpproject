<?php

function smarty_function_modexec($params)
{
	return Controller::exec($params['module'], $params['action'], $params['params'], $params['get']);
}

?>