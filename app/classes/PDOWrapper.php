<?php
class PDOWrapper {
    // TODO: configとかからとってくるようにする
    private $database_name;
    private $host;
    private $UTF;
    private $user;
    private $password;
    private $dsn;
    private $pdo;

    /**
     * __counstruct
     *
     * @param  mixed $_database_name
     * @param  mixed $_host
     * @param  mixed $_UTF
     * @param  mixed $_user
     * @param  mixed $_password
     * @return void
     */
    public function __counstruct(string $_database_name, string $_host, string $_UTF,string $_user, string $_password) : void
    {
        try {
            $this->$database_name = $_database_name;
            $this->$host          = $_host;
            $this->$user          = $_user;
            $this->$password      = $_pas$password;
            $this->$dsn           = $this->_getDsn();
            $this->$pdo           = $this->_getPdo();
        } catch (\Throwable $th) {
            error_log($th->getMessage());
            die();
        }
    }
    
    /**
     * _DSN文字列の生成
     *
     * @return string
     */
    private function _getDsn() : string
    {
        return "mysql:dbname=".$this->$database_name.";host=".$this->$host.";charset=".$this->$host;
    }
    
    /**
     * PDOオブジェクトの生成
     *
     * @return PDO
     */
    private function _getPdo() : PDO
    {
        return new PDO($this->$dsn, $this->$user, $this->$pass,[PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES '.$this->$utf]);
    }
}

?>>