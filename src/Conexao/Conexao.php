<?php
    
    namespace CR\Conexao;

    Class Conexao
    {
        
        public $db = "";

        function __construct() {
            try {
                $config['dbname'] = 'nomeservidor';
                $config['host'] = 'caminhodoservidor';
                $config['dbuser'] = 'nomeusuario';
                $config['dbpass'] = 'senha';
                $this->db = new \PDO("mysql:host=".$config['host'].";dbname=".$config['dbname'], $config['dbuser'], $config['dbpass'], array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                    \PDO::ATTR_EMULATE_PREPARES => false,
                    \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC, 
                    \PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
                    ));

            } catch (\PDOException $e) {
                echo $e->getMessage();
            }
        }

        public function getInstance(){
            return $this->db;
        }

    }

