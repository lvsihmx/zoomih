<?php
    class db{
        private $host="mysql-lvs.alwaysdata.net";
        private $dbname="lvs_login";
        private $user="lvs_in";
        private $password="Television55%";
        public function conexion(){
            try {
                $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
                return $PDO;
            } catch (PDOException $e) {
                return $e->getMessage();
            }
        }
    }
$obj=new db();
print_r($obj->conexion());


?>