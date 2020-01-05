<?php


namespace Controllers;

use Application\Session;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\Application as App;
use Handlers\ValidationHandler;

class UserAuthController extends Controller
{
    public function DefaultAction($params = [])
    {
        parent::DefaultAction();
        echo $this->twig->render('/signup/signup.html.twig');
    }

    public function CheckDataAction($params)
    {
        try {
            ValidationHandler::formDataArrayValidation($params);
        } catch (\Exception $e){

        }
    }
}