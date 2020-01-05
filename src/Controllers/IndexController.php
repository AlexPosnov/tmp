<?php


namespace Controllers;

use Application\Session;
use Models\TestModel;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;
use Application\Application as App;

class IndexController extends Controller
{
    public function DefaultAction($params = [])
    {
        parent::DefaultAction();
        $content = new TestModel();
        $content = $content->getContent();
        echo $this->twig->render('index.html.twig',
            ['content' => $content,
                'session' => Session::$data
            ]);
    }
}