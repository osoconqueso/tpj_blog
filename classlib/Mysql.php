<?php

class Mysql {

    /**
     * instantiated instance of the object
     * @var MySQL database
     */

    private static $instance;

    public $db;

    public function construct() {

        $hostName = '127.0.0.1';
        $userName = 'root';
        $password = 'root';
        $database = 'tpj';

        //change this later to PDO::ERRMODE_SILENT
        //ATTR_ERRMODE => PDO::ERRMODE_WARNING gives php error
        //change to PDO::ERRMODE_EXCEPTION  - when handling the errors with 'try'{} $ 'catch'{}

        $this->db = new PDO("mysql:host=$hostName;dbname=$database", $userName, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

        /**
         * Get a singleton instance of the database
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
}