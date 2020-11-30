<?php

namespace App\Db;

use PDO;
use PDOException;

class Database {

    /*
    *Host de conecao com o bd
    *@var string
    */
    const HOST = '127.0.0.1';
    
    /*
    *Nome do bd
    *@var string
    */
    const NAME = 'wdev_vagas';

    /*
    *Usuario do bd
    *@var string
    */
    const USER = 'root';

    /*
    *Senha de acesso ao bd
    *@var string
    */
    const PASS = '';

    /*
    *Nome da tabela a ser manipulada
    *@var string
    */
    private $table;

    /*
    *Instancia de conexao com o bd
    *@var PDO
    */
    private $connection;

    /*
    *Define a tabela e instancia e conexao
    *@param string $table
    */
    public function __contruct($table = null)
    {
        $this->table = $table;
        $this->setConnection();
    }

    /*
    *Metodo responsavel por criar uma conexao com o bd
    *
    */
    private function setConnection(){
        try{
            $this->connection = new PDO('mysql:host='.self::HOST.';dbname='.self::NAME,self::USER,self::PASS);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        }catch(PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }

    /*
    *Metodo responsavel por executar queries dentro do bd
    *@param string $query
    *@param array $params
    *@return PDOStatement
    */
    public function execute($query,$params = []){
        try{
            $statement = $this->connection->prepare($query);
            $statement->execute($params);
            return $statement;
        }catch(PDOException $e) {
            die('ERROR: '.$e->getMessage());
        }
    }

    /*
    *Metodo responsavel por inserir dados no bd
    * @param array $values [field => values]
    * @return integer ID inserido
    */
    public function insert($values){
        //dados da query
        $fields = array_keys($values);
        $binds = array_pad([],count($fields),'?');
        //echo "<pre>"; print_r($binds); echo "</pre>"; exit;

        //monta a query
        $query = 'INSERT INTO '.$this->table.' ('.implode(',',$fields).') VALUES ('.implode(',',$binds).')';

        //executa o insert
        $this->execute($query,array_values($values));

        //retornao ID inserido
        return $this->connection->lastInsertId();
    }
}