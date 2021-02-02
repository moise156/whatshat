<?php

class database{
private $_host;
private $_dbname;
private $_user;
private $_pass;
public $bdd;

public function __construct(string $host,string $dbname,string $user,string $pass=null)
{
   
    $this->_host=$host;
    $this->_dbname=$dbname;
    $this->_user=$user;
    $this->_pass=$pass;

    try {
     $this->bdd=new PDO('mysql:host='.$this->_host.';dbname='.$this->_dbname,$this->_user,$this->_pass);
     $this->bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $this->bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_NATURAL);
     $this->bdd->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
    } catch (\Throwable $th) {
        echo("erreur").$th->getMessage();
    }
    return $this->bdd;
}

}
?>
