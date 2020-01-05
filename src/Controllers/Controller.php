<?php


namespace Controllers;

use Models\TestModel;
use Application\Application as App;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

class Controller
{
    protected $params = [];
    public $template = '';
    protected $twig_loader;
    protected $twig;
    protected $is_auth;

    /**
     * IndexController constructor.
     *
     * @param string $action
     * @param array $params
     */
    public function __construct($action, array $params = [])
    {
        $this->params = $params;
        if (empty($action)) {
            $action = 'Default';
        }
        $act = $action . 'Action';
        try {
            $this->$act($this->params);
        } catch (\Error $e) {
            $this->params['error'] = $e;
            $this->ActionNotFound($this->params);
        }

    }

    /**
     * This action must get some default params of page.
     * Or just default page.
     */
    protected function DefaultAction($params = [])
    {
        $this->twig_loader = new FilesystemLoader(TWIG_TEMP_DIR);
        $this->twig = new Environment($this->twig_loader);
    }

    /**
     * This method will be invoke if no one action in
     * called class will not be found.
     *
     * @param $params array Error param if page or action was not found.
     */
    protected function ActionNotFound($params)
    {
        $action = 'PageNotFound';
        new PageNotFoundController($action, $params);
    }
}