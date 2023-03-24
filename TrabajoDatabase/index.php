<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>BD_Campeonato</h1>
    <?php
    include_once('./clases/CConexion.php');
    $Consulta = CConexion::ConexionBD();
    ?>
    <div>
        <form action="">
            <button id="gestion">Gestionar Equipos</button>
            <button id="registro">Registrar Partido</button>
            <button id="resultados">Ver Resultados</button>
        </form>
    </div>
    <div id="container">
    </div>
    <script>
        const Gestion = document.getElementById('gestion');
        const Registro = document.getElementById('registro');
        const Resultados = document.getElementById('resultados');


        Gestion.addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('container').innerHTML = `
            <form action="./clases/CEquipos.php" method = "POST">
                <label for="seleccion">Seleccionar row</label>
                <input type="number" name ="seleccion" id="seleccion">
                <label for="nom_equ">Nombre Equipo</label>
                <input type="text" name = "nom_equ" id="nom_equ">
                <br>
                <label for="nom_entrenador">Nombre Entrenador</label>
                <input type="text" name="nom_entrenador" id="nom_entrenador">
                <input type="submit" value = "guardar" name="guardar" id="guardar">
                <input type="submit" value = "modificar" name="modificar" id="modificar">
                <input type="submit" value = "eliminar" name="eliminar" id="eliminar">
            </form>
            
            <table id="miTabla">
                <tr>
                    <th>ID_EQUIPO</th>
                    <th>NOMBRE_EQUIPO</th>
                    <th>NOMBRE_ENTRENADOR</th>
                </tr>
                <tbody>
                <?php
                include_once('./clases/CEquipos.php');
                $consulta = CEquipo::mostrarEquipos();
                foreach ($consulta as $fila) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_EQUIPO'] . "</td>";
                    echo "<td>" . $fila['NOMBRE_EQUIPO'] . "</td>";
                    echo "<td>" . $fila['NOMBRE_ENTRENADOR'] . "</td>";
                    echo "<td>" . "<input type = \"submit\" value=\"seleccionar\" onClick = \"seleccionar()\"></input>" . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            `
        })

        Registro.addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('container').innerHTML = `
            <form action="./clases/CEquipos.php" method="POST">
                <input type="date" name="fecha" id="fecha">
                <select name="equipo_local" id="equipo_local">
                    <?php
                    include_once('./clases/CEquipos.php');
                    $consulta_local = CEquipo::mostrarEquipos();
                    foreach ($consulta_local as $fila_1) {
                        echo "<option>" . $fila_1['NOMBRE_EQUIPO'] . "</option>";
                    }
                    ?>
                </select>
                <input type="number" name="Goles_equ_local" id="Goles_equ_local">
                <input type="number" name="Goles_equ_visit" id="Goles_equ_visit">
                <select name="equipo_visit" id="equipo_visit">
                    <?php
                    include_once('./clases/CEquipos.php');
                    $consulta_visit = CEquipo::mostrarEquipos();
                    foreach ($consulta_visit as $fila_2) {
                        echo "<option>" . $fila_2['NOMBRE_EQUIPO'] . "</option>";
                    }
                    ?>
                </select>
                <input type="submit" name="insertar" id="insertar" value="insertar">
            </form>
            `
        })

        Resultados.addEventListener('click', (e) => {
            e.preventDefault();
            document.getElementById('container').innerHTML = `
            <table id="miTabla">
                <tr>
                    <th>ID_PARTIDO</th>
                    <th>FECHA</th>
                    <th>NOM_EQU_LOCAL</th>
                    <th>GOLES_EQU_LOCAL</th>
                    <th>GOLES_EQU_VISIT</th>
                    <th>NOM_EQU_VISIT</th>
                </tr>
                <tbody>
                <?php
                include_once('./clases/CEquipos.php');
                $consulta = CEquipo::mostrarPartidos();
                foreach ($consulta as $fila) {
                    echo "<tr>";
                    echo "<td>" . $fila['ID_PARTIDO'] . "</td>";
                    echo "<td>" . $fila['FECHA'] . "</td>";
                    echo "<td>" . $fila['NOM_EQU_LOCAL'] . "</td>";
                    echo "<td>" . $fila['GOLES_EQU_LOCAL'] . "</td>";
                    echo "<td>" . $fila['GOLES_EQU_VISIT'] . "</td>";
                    echo "<td>" . $fila['NOM_EQU_VISIT'] . "</td>";
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
            
            `
        })

        function seleccionar() {
            let table = document.getElementById('miTabla');
            for (let i = 0; i < table.rows.length; i++) {
                table.rows[i].onclick = function() {
                    document.getElementById('seleccion').value = this.cells[0].innerHTML;
                    document.getElementById('nom_equ').value = this.cells[1].innerHTML;
                    document.getElementById('nom_entrenador').value = this.cells[2].innerHTML;
                };
            }
        }
    </script>
</body>

</html>