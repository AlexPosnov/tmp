<?php


namespace Application;


class Session
{
    /**
     * Contents all session data.
     *
     * @var
     */
    public static $data;

    /**
     * I still don't no what for it will use.
     *
     * Session constructor.
     */
    public function __construct()
    {

    }

    /**
     * Set some content into session.
     *
     * @param $name
     * @param $value
     */
    public static function setData($name, $value)
    {
        self::$data[$name] = $value;
    }

    /**
     * Gets some content from session.
     *
     * @param $name
     * @return mixed
     */
    public static function getData($name)
    {
        return self::$data[$name];
    }

    /**
     * Set some array data.
     *
     * @param array $data
     */
    public static function setArrayData(array $data)
    {
        foreach ($data as $key => $value)
        {
            self::setData($key, $value);
        }
    }
}