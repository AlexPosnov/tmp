<?php


namespace Controllers;


class PageNotFoundController extends Controller
{
    public function __construct($action, array $params = [])
    {
        $this->PageNotFoundAction();
    }

    protected function PageNotFoundAction()
    {
        echo 'page was not found';
    }
}