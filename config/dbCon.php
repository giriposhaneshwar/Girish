<?php

class dbCon extends PDO {

    function __construct() {
        include './config/const.php';

        try {
            $dsn = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_DB;
            $db = new PDO($dsn, DB_USER, DB_PASS);

            if ($db) {
                parent::__construct($dsn, DB_USER, DB_PASS);
            } else {
                echo "could not connnect";
            }
        } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
    

}