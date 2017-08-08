<?php

/**
 * Created by PhpStorm.
 * User: lazap
 * Date: 8/5/2017
 * Time: 10:32 PM
 */
class Database {

    private static $connection;

    private static $host;
    private static $db;
    private static $user;
    private static $pass;
    private static $charset;

    public static function getConntection(){
        if(self::$connection == null){
            self::init();

            $dsn = $dsn = "mysql:host=". self::$host .";dbname=". self::$db .";charset=". self::$charset;
            $opt = [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];

            self::$connection = new PDO($dsn, self::$user, self::$pass, $opt);
        }
        return self::$connection;
    }

    private function init(){
        self::$host = "";
        self::$db = "";
        self::$user = "";
        self::$pass = "";
        self::$charset = "";
    }

    private function __construct() {

    }

}