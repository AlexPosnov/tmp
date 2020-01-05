<?php


namespace Models;


class User extends Model
{
    /**
     * @var string
     */
    private $status = '';
    /**
     * @var string
     */
    private $name = '';
    /**
     * @var
     */
    private $registration_data;
    /**
     * @var
     */
    private $is_admin;
    /**
     * @var string
     */
    private $login = '';
    /**
     * @var string
     */
    private $password = '';
    /**
     * @var string
     */
    private $email = '';

    private $articles;

    /**
     * User constructor.
     * @param string $status
     * @param string $name
     * @param $registration_data
     * @param $is_admin
     * @param string $login
     * @param string $password
     * @param string $email
     */
    public function __construct($status, $name, $registration_data, $is_admin, $login, $password, $email)
    {
        parent::__construct();
        $this->status = $status;
        $this->name = $name;
        $this->registration_data = $registration_data;
        $this->is_admin = $is_admin;
        $this->login = $login;
        $this->password = $password;
        $this->email = $email;
    }

    /**
     * User constructor.
     * @param $name
     * @param $login
     * @param $email
     * @param $password
     * @param bool $admin
     */



    /**
     *
     */
    public function userRegistration()
    {

    }

    /**
     *
     */
    public function userDelete()
    {

    }

    /**
     *
     */
    public function disableUser()
    {

    }

    /**
     *
     */
    public function enableUser()
    {

    }

    /**
     *
     */
    public function getUserDataByID()
    {

    }

    /**
     *
     */
    public function recoveryPassword()
    {

    }

    /**
     *
     */
    public function setAdminStatus()
    {

    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRegistrationData()
    {
        return $this->registration_data;
    }

    /**
     * @param mixed $registration_data
     */
    public function setRegistrationData($registration_data)
    {
        $this->registration_data = $registration_data;
    }

    /**
     * @return mixed
     */
    public function getIsAdmin()
    {
        return $this->is_admin;
    }

    /**
     * @param mixed $is_admin
     */
    public function setIsAdmin($is_admin)
    {
        $this->is_admin = $is_admin;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param string $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }



}