<?php

class Database
{
    private $connection;

    protected $table;

    private $data = null;

    private $statement;

    private $sql;

    private $userData;

    public function __construct()
    {
        $file = __DIR__ . '/../database_config.ini';

        $config = parse_ini_file($file,true);

        extract($config["database"]);

        $options = [
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_CASE => PDO::CASE_NATURAL
        ];

        $this->connection = new PDO(
            'mysql:host=' . $host . ';dbname=' . $dbname,
            $username,
            $password,
            $options
        );

        $this->sql = "SELECT * FROM {$this->table} ";
    }

    public function getConnection()
    {
        return $this->connection;
    }

    private function prepare()
    {
        echo $this->sql;
        try{
        $this->statement = $this->connection->prepare($this->sql);
        if (!empty($this->userData)) {
            foreach ($this->userData as $key => $value) {
                $this->statement->bindParam(':' . $key, $value);
            }
        }} catch(Exception $e) {
            var_dump($e->getMessage());
        } catch (PDOException $p) {
            var_dump($p->getMessage());
        }
    }

    public function get()
    {
        $this->prepare();
        $this->statement->execute();
        $count = $this->statement->rowCount();
        if ($count) {
            if ($count == 1) {
                $this->data = $this->statement->fetchObject();
            } else {
                $this->data = $this->statement->fetchAll(PDO::FETCH_OBJ);
            }
        }
        return $this->data;
    }

    public function all()
    {
        return $this->get();
    }

    public function where($key = [], $value = '', $equals = '=')
    {
        $this->userData[$key] = $value;
        $existsWhere = strpos(strtolower($this->sql), 'where');
        if ($existsWhere === false) {
            $this->sql .= ' WHERE ';
            $this->sql .= " {$key} {$equals} :{$key} ";
        } else {
            $this->sql .= " AND {$key} {$equals} :{$key} ";
        }
        return $this;
    }

    public function whereOr($key = [], $value = '', $equals = '=')
    {
        $this->userData[$key] = $value;
        $existsWhere = strpos(strtolower($this->sql), 'where');
        if ($existsWhere === false) {
            $this->sql .= ' WHERE ';
            $this->sql .= " {$key} {$equals} :{$key} ";
        } else {
            $this->sql .= " OR {$key} {$equals} :{$key} ";
        }
        return $this;
    }

    public function salvar($data)
    {
        $this->userData = $data;
        /*$sql = ''
        foreach ($dados as $campo => $valor) {

        }*/
    }
}
