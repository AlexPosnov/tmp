<?php

namespace Application;

use Routers\Router;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\CookieHandler;
use Application\Session;

class Application
{
    /**
     * @var array
     */
    private static $template = [];

    /**
     * @var
     */
    private $session;
    /**
     * @var
     */
    private $user;
    /**
     * @var
     */
    private $router;
    /**
     * @var array
     */
    public static $content = [];

    /**
     * Application constructor.
     */
    public function __construct()
    {
        new CookieHandler();
        Session::setArrayData($_SESSION);
        self::setContent('is_auth', self::checkAuth(Session::getData('name')));
        $this->Router();
    }


    /**
     * Launch new router for current request.
     *
     * @param array $template
     * @return Router
     */
    public function Router(array $template = [])
    {
        new Router();
    }

    /**
     * Set some content in Application class.
     *
     * @param $name
     * @param $value
     */
    public static function setContent($name, $value)
    {
        self::$content[$name] = $value;
    }

    /**
     * Get some stored content from Application class.
     *
     * @param $name
     * @return mixed
     */
    public static function getContent($name)
    {
        return self::$content[$name];
    }

    /**
     * Set some template to Application.
     *
     * @param $name
     * @param $value
     */
    public static function setTemplate($name, $value)
    {
        self::$template[$name] = $value;
    }

    /**
     * Get some template from Application.
     *
     * @param $name
     * @return mixed
     */
    public static function getTemplate($name)
    {
        return self::$template[$name];
    }

    /**
     * Checks if a user authorized or not.
     *
     * @param string $auth
     * @return bool
     */
    protected static function checkAuth($auth)
    {
        return isset($auth);
    }
}