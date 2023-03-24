<?php

include_once "CConexion.php";

class CEquipo
{
    public static function mostrarEquipos()
    {
        $query = CConexion::ConexionBD()->prepare("select * from equipos");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    public static function insertarNuevoEquipo()
    {
        $Nom_Equ = $_POST['nom_equ'];
        $Nom_Ent = $_POST['nom_entrenador'];

        $query = CConexion::ConexionBD()->prepare("insert into equipos (NOMBRE_EQUIPO,NOMBRE_ENTRENADOR) values (?,?)");
        $query->bindParam(1, $Nom_Equ, PDO::PARAM_STR);
        $query->bindParam(2, $Nom_Ent, PDO::PARAM_STR);
        if ($query->execute()) {
            // echo "Ingreso Correcto";
            header("Location: ../index.php");
        } else {
            // echo "Ingreso incorrecto";
            header("Location: ../index.php");
        }
    }
    public static function modificarEquipo()
    {
        $seleccion = $_POST['seleccion'];
        $Nom_Equ = $_POST['nom_equ'];
        $Nom_Ent = $_POST['nom_entrenador'];

        $query = CConexion::ConexionBD()->prepare("UPDATE equipos SET equipos.NOMBRE_EQUIPO=?,equipos.NOMBRE_ENTRENADOR=? WHERE equipos.ID_EQUIPO = $seleccion");
        $query->bindParam(1, $Nom_Equ, PDO::PARAM_STR);
        $query->bindParam(2, $Nom_Ent, PDO::PARAM_STR);
        if ($query->execute()) {
            // echo "Ingreso Correcto";
            header("Location: ../index.php");
        } else {
            // echo "Ingreso incorrecto";
            header("Location: ../index.php");
        }
    }
    public static function eliminarEquipo()
    {
        $seleccion = $_POST['seleccion'];
        $query = CConexion::ConexionBD()->prepare("DELETE FROM equipos WHERE equipos.ID_EQUIPO = $seleccion");
        if ($query->execute()) {
            // echo "Ingreso Correcto";
            header("Location: ../index.php");
        } else {
            // echo "Ingreso incorrecto";
            header("Location: ../index.php");
        }
    }
    public static function guardarPartidos()
    {
        $fecha = $_POST['fecha'];
        $Nom_Equ_local = $_POST['equipo_local'];
        $Goles_equ_local = $_POST['Goles_equ_local'];
        $Goles_equ_visit = $_POST['Goles_equ_visit'];
        $Nom_equ_visit = $_POST['equipo_visit'];

        $query = CConexion::ConexionBD()->prepare("insert into partidos (FECHA,NOM_EQU_LOCAL,GOLES_EQU_LOCAL,GOLES_EQU_VISIT,NOM_EQU_VISIT) values (?,?,?,?,?)");
        $query->bindParam(1, $fecha, PDO::PARAM_STR);
        $query->bindParam(2, $Nom_Equ_local, PDO::PARAM_STR);
        $query->bindParam(3, $Goles_equ_local, PDO::PARAM_INT);
        $query->bindParam(4, $Goles_equ_visit, PDO::PARAM_INT);
        $query->bindParam(5, $Nom_equ_visit, PDO::PARAM_STR);
        if ($query->execute()) {
            // echo "Ingreso Correcto";
            header("Location: ../index.php");
        } else {
            // echo "Ingreso incorrecto";
            header("Location: ../index.php");
        }
    }
    public static function mostrarPartidos()
    {
        $query = CConexion::ConexionBD()->prepare("select * from partidos");
        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
}
if (array_key_exists('guardar', $_POST)) {
    CEquipo::insertarNuevoEquipo();
}

if (array_key_exists('modificar', $_POST)) {
    CEquipo::modificarEquipo();
}

if (array_key_exists('eliminar', $_POST)) {
    CEquipo::eliminarEquipo();
}

if (array_key_exists('insertar', $_POST)) {
    CEquipo::guardarPartidos();
}
