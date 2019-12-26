<?php

namespace Routers;

use Routers\RoutersLoader;

class Router
{
    /**
     * Current controller.
     *
     * @var string
     */
    private $current_controller = '';
    private $current_action = '';

    /**
     * If current controller in undefined it should be 'index'.
     * If controller was not found it redirect to 404 page.
     */
    public function __construct()
    {
        if (!empty($_GET['controller']) && RoutersLoader::checkValidRouters($_GET['controller'])) {
            $this->current_controller = '\\Controllers\\' . ucfirst($_GET['controller']) . 'Controller';
        } elseif (empty($_GET['controller'])) {
            $this->current_controller = '\\Controllers\\IndexController';
        } else {
            $this->current_controller = '\\Controllers\\PageNotFoundController';
            $this->current_action = '';
        }

        if (!empty($_GET['action'])) {
            $this->current_action = $_GET['action'];
        }
        unset($_GET['controller'], $_GET['action']);
        $this->getController();
    }

    /**
     * Get instance of controller and run it.
     */
    protected function getController()
    {
        $params = $this->getParamsfromGetMethod();
        $controller = new $this->current_controller($this->current_action, $params);
    }

    /**
     * return params from get-request and return it as array.
     *
     * @return array
     */
    protected function getParamsfromGetMethod()
    {
        $params = [];
        foreach ($_GET as $key => $param) {
            if ($key !== 'action' || $key !== 'controller') {
                $params[] = $param;
            }
        }
        return $params;
    }
}