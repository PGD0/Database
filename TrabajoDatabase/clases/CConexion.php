<?php
class CConexion
{
    public static function ConexionBD()
    {
        $host = 'localhost';
        $dbname = 'bd_campeonato';
        $username = 'root';
        $password = 'juanse0719';
        try {
            $conn = new PDO("mysql:host=$host; port =33061; dbname=$dbname", $username, $password);
            // echo "Se conecto a la base de datos";
        } catch (PDOException $pe) {
            die("No se logro conectar a la Base de Datos" . $pe->getMessage());
        }
        return $conn;
    }
}
