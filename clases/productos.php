<?php
require_once("conectar.php");
class Productos extends Conectar
{
    private $con;
    
    public function __construct()
    {
        $this->con=parent::con();
        parent::setNames();
    }
    
    public function getProductos()
    {
        $sql="select id,nombre,seo_slug,descripcion,precio,fecha_creacion from productos;";
        //echo $sql;
        $datos = $this->con->prepare($sql);
        $datos->execute();
        return $datos->fetchAll();
        
    }
    public function insertar()
    {
       
        $sql="insert into productos
            values
            (null,?,?,?,?,?);
            ";
        $datos=$this->con->prepare($sql);
        
        $datos->bindParam(1,$_POST["nom"],PDO::PARAM_STR); 
        $datos->bindParam(4,$_POST["precio"],PDO::PARAM_STR);
        $datos->bindParam(5,$_POST["fecha"],PDO::PARAM_STR); 
        $datos->bindParam(2,$_POST["nom"],PDO::PARAM_STR);
        $datos->bindParam(3,$_POST["des"],PDO::PARAM_STR);
        
        $datos->execute();  
        return $this->con->lastInsertId();
    }
}
