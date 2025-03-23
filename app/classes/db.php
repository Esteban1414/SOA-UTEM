<?php

namespace app\classes;

use \PDO;

class db
{
    private $db_host;
    private $db_name;
    private $db_user;
    private $db_pass;
    private $conne;

    protected $table;
    protected $fillable = [];
    protected $values = [];


    public function __construct($dbh = DB_HOST, $dbn = DB_NAME, $dbu = DB_USER, $dbp = DB_PASS)
    {
        $this->db_host = $dbh;
        $this->db_name = $dbn;
        $this->db_user = $dbu;
        $this->db_pass = $dbp;
    }

    protected function connect()
    {
        try {
            $this->conne = new PDO("mysql:host=" . $this->db_host . ";dbname=" . $this->db_name, $this->db_user, $this->db_pass);
            $this->conne->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conne->exec("SET CHARACTER SET utf8");
        } catch (\PDOException $err) {
            $code = $err->getCode();
            $message = $err->getMessage();
            echo "Exception: [Code $code] $message";
            die();
        }
        return $this->conne;
    }

    public function insert()
    {
        try {
            $sql = "INSERT INTO " . str_replace("app\\models\\", "", get_class($this)) .
                " (" . implode(",", $this->fillable) . ') values (' .
                trim(str_replace("&", "?,", str_pad("", count($this->values), "&")), ",") . ');';

            $stmt = $this->table->prepare($sql);
            foreach ($this->values as $v => $value) {
                $stmt->bindValue(($v + 1), $value);
            }
            $stmt->execute();
            return $this->table->lastInsertId();
        } catch (\PDOException $err) {
            return false;
        }
    }
}
