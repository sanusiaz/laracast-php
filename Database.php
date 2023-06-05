<?php

    include_once dirname(__FILE__) . './Response.php';
    class Database
    {
        protected $pdo;
        protected $statement;

        public function __construct($config) 
        {
            $dsn = 'mysql:'. http_build_query($config, '', ';'); // example of the http_build_query: 

            $this->pdo = new PDO($dsn, $config['username'], $config['password'], [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
            ]);
        }


        public function query($query)
        {
            $this->statement = $this->pdo->prepare($query);
            $this->statement->execute();
            return $this;
        }

        public function fetch()
        {
            return $this->statement->fetch();
        }

        public function get()
        {
            return $this->statement->fetchAll();
        }

        public function findOrFail()
        {
            $results = $this->statement->fetchAll();

            if ( !$results ) {
                abort(Response::NOT_FOUND);
            }

            return $results;
        }
    }


