<?php


namespace Settings;

class DBHandler
{
    /**
     * @var mixed|string
     */
    private $user = '';
    /**
     * @var mixed|string
     */
    private $password = '';
    /**
     * @var mixed|string
     */
    private $database = '';
    /**
     * @var mixed|string
     */
    private $host = '';
    /**
     * @var array|mixed
     */
    private $dbsettings = [];

    /**
     * DBHandler constructor.
     * @param string $mode
     */
    public function __construct($mode = 'standard')
    {
        if ($mode === 'standard') {
            $this->dbsettings = include(CONFIG_DIR . '/db_settings.php');
            $this->user = $this->dbsettings['user'];
            $this->password = $this->dbsettings['password'];
            $this->database = $this->dbsettings['database'];
            $this->host = $this->dbsettings['host'];
            \R::setup('mysql:host=' . $this->host . ';dbname=' . $this->database, $this->user, $this->password);
        } else {
            $mode = $mode . 'Method';
            $this->$mode();
        }
    }

    /**
     * @return mixed|string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @return mixed|string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return mixed|string
     */
    public function getDatabase()
    {
        return $this->database;
    }

    /**
     * @return mixed|string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @return array|mixed
     */
    public function getDbsettings()
    {
        return $this->dbsettings;
    }


    /**
     * @param $name
     * @param $arguments
     * @return string
     */
    public function __call($name, $arguments)
    {
        return 'Mode is not defined';
    }
}