<?php


namespace Application;

use Application\Session;

class CookieHandler
{
    public function __construct()
    {
        $this->setUserNameIntoSession();
    }

    private function setUserNameIntoSession()
    {
        if (isset ($_COOKIE['name'])) {
           Session::setData('name', $_COOKIE['name']);
        }
    }
}