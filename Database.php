<?php

    
    class Database
    {
        protected $pdo;

        public function __construct($config) 
        {
            $dsn = 'mysql:'. http_build_query($config, '', ';'); // example of the http_build_query: 

            $this->pdo = new PDO($dsn, $config['username'], $config['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }


        public function query($query)
        {
            $statement = $this->pdo->prepare($query);
            $statement->execute();
            return $statement;
        }
    }


