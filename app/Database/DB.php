<?php

    namespace App\Database;



    class DB {
        private $pdo;
        public $statement;

        public function __construct($config = "")
        {
            $config = require_once( ABSOLUTE_PATH . './Config/Database.php' );
            $dsn = "mysql:". http_build_query($config, "", ";");
            $this->pdo = new \PDO($dsn, $config['username'], $config['password'], [
                \PDO::ATTR_DEFAULT_FETCH_MODE  => \PDO::FETCH_ASSOC
            ]);
        }

        public function query($rawQuery)
        {
            $this->statement = $this->pdo->prepare($rawQuery);
            $this->statement->execute();

            return $this;
        }

        public function get() 
        {
            return $this->statement->fetchAll();
        }

        public function findOrFail()
        {
            $result = $this->statement->fetch();

            if ( !$result ) {
                return null;
            }

            return $result;
        }

        public function processTables()
        {
            $tables = require(ABSOLUTE_PATH . './app/Config/Tables.php');

            echo "<pre>";
            print_r($tables);
            // $runTable = $this->query("")
        }
    }