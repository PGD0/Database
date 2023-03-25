<?php
include_once "CConexion.php";

class CPartido
{
    public static function mostrarEquipos()
    {
        $query = CConexion::ConexionBD()->prepare("select NOMBRE_EQUIPO from equipos");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public static function guardarPartidos()
    {
        $fecha = $_POST['fecha'];
        $equ_local = $_POST['equipo_local'];
        $goles_local = $_POST['Goles_equ_local'];
        $goles_visit = $_POST['Goles_equ_visit'];
        $equ_visit = $_POST['equipo_visit'];

        $query = CConexion::ConexionBD()->prepare("insert into partidos (FECHA,NOM_EQU_LOCAL,GOLES_EQU_LOCAL,GOLES_EQU_VISIT,NOM_EQU_VISIT) values (?,?,?,?,?)");

        $query->bindParam(0, $fecha, PDO::PARAM_STR);
        $query->bindParam(1, $equ_local, PDO::PARAM_STR);
        $query->bindParam(2, $goles_local, PDO::PARAM_INT);
        $query->bindParam(3, $goles_visit, PDO::PARAM_INT);
        $query->bindParam(4, $equ_visit, PDO::PARAM_STR);
        if ($query->execute()) {
            echo "Ingreso Correcto";
            // header("Location: ../index.php");
        } else {
            echo "Ingreso incorrecto";
            // header("Location: ../index.php");
        }
    }
}
if (array_key_exists('insertar', $_POST)) {
    CPartido::guardarPartidos();
}
