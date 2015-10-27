<?php
abstract class Conectar
{
    private $con;
    
    public function con()
    {
        try
        {
            //DSN Domain Server Name
            $this->con=new PDO("mysql:dbname=sipsup;host=localhost","root","");
        }catch(PDOException $e)
        {
            die("Error en la coneas kjsdnbkl");
        }
        return $this->con;
        
    }
    public function setNames()
    {
        return $this->con->query("SET NAMES 'utf8'");
    }
}
