<?php

class Mysql
{

    /**
     * @var Mysql
     */
    private static $instance;

    /**
     * @var PDO
     */
    public $db;

    public function __construct()
    {
        $hostName = '127.0.0.1';
        $userName = 'root';
        $password = 'root';
        $database = 'tpj';

        //change this later to PDO::ERRMODE_SILENT
        //change to PDO::ERRMODE_EXCEPTION  - when handling the errors with 'try'{} $ 'catch'{}
        try {
            $this->db = new PDO("mysql:host=$hostName;dbname=$database", $userName, $password);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        } catch (Exception $e) {
            echo 'Exception -> ';
            var_dump($e->getMessage());
        }
    }

    /**
     * @return Mysql database
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

}