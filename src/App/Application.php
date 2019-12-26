<?php

use Routers\Router;

class Application
{
    private $template = [];
    private $session;
    private $user;
    private $router;

    public function __construct()
    {
        $this->session = $_SESSION;
        $this->template = $this->getDefaultTemplate();
        $this->template = $this->getModelTemplates();
        $this->render();
    }

    public function getDefaultTemplate(array $template)
    {
        $template['meta'] = VIEW_DIR . '/Pages/CommonTemplates/meta.tpl';
        $template['header'] = VIEW_DIR . '/Pages/CommonTemplates/header.tpl';
        $template['footer'] = VIEW_DIR . '/Pages/CommonTemplates/footer.tpl';

        return $template;
    }

    public function getModelTemplates(array $template)
    {
        return $this->router = new Router();
    }

    public function render()
    {

    }

}