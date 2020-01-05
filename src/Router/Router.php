<?php

namespace Routers;

use Routers\RoutersLoader;

/**
 * Class Router
 * @package Routers
 */
class Router
{
    /**
     * Current controller.
     *
     * @var string
     */
    private $current_controller = '';
    /**
     * @var mixed|string
     */
    private $current_action = '';

    /**
     * If current controller in undefined it should be 'index'.
     * If controller was not found it redirect to 404 page.
     */
    public function __construct()
    {
        if (!empty($_REQUEST['controller']) && RoutersLoader::checkValidRouters($_REQUEST['controller'])) {
            $this->current_controller = '\\Controllers\\' . $this->toCamelCaseParser($_REQUEST['controller']) . 'Controller';
        } elseif (empty($_REQUEST['controller'])) {
            $this->current_controller = '\\Controllers\\IndexController';
        } else {
            $this->current_controller = '\\Controllers\\PageNotFoundController';
            $this->current_action = '';
        }

        if (!empty($_REQUEST['action'])) {
            $this->current_action = $this->toCamelCaseParser($_REQUEST['action']);
        }
        unset($_REQUEST['controller'], $_REQUEST['action']);
        return $this->getController();
    }

    /**
     * Get instance of controller and run it.
     */
    protected function getController()
    {
        $params = $this->getParamsfromGetMethod();
        $controller = new $this->current_controller($this->current_action, $params);
        return $controller;
    }

    /**
     * return params from get-request and return it as array.
     *
     * @return array
     */
    protected function getParamsfromGetMethod()
    {
        $params = [];
        foreach ($_REQUEST as $key => $param) {
            if ($key !== 'action' || $key !== 'controller') {
                $params[] = $param;
            }
        }
        return $params;
    }

    /**
     * Make from snake case string camel case string and return it.
     *
     * @param string $value
     * @return string
     */
    protected function toCamelCaseParser(string $value)
    {
        $value = str_split(ucfirst($value));
        for ($i = 0; $i < count($value); $i++) {
            if ($value[$i] === '_') {
                $value[$i + 1] = ucfirst($value[$i + 1]);
                unset($value[$i]);
            }
        }
        return implode($value);
    }
}