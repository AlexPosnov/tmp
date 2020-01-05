<?php

namespace Models;

use Settings\DBHandler;
use Application\Application;

class Model
{
    public $DBHandler;

    public function __construct()
    {
        $this->DBHandler = new DBHandler('standard');
    }

}