
const Gestion = document.getElementById('gestion');
const Registro = document.getElementById('registro');
const Resultados = document.getElementById('resultados');


Gestion.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('container').innerHTML = `
    <form action="">
        <label for="nomE">Nombre Equipo</label>
        <input type="text" id="nomE">
        <br>
        <label for="nomEn">Nombre Entrenador</label>
        <input type="text" id="nomEn">
    </form>
    <input type="submit" value = "guardar">
    <input type="submit" value = "modificar">
    <input type="submit" value = "eliminar">
    <table>
        <tr>
            <th>ID_EQUIPO</th>
            <th>NOMBRE_EQUIPO</th>
            <th>NOMBRE_ENTRENADOR</th>
        </tr>
        <tbody>
            
        </tbody>
    </table>
    `
})

Registro.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('container').innerHTML = `
    <input type="date" name="" id="" placeholder="Fecha">
    <select name="equipo_local" id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        <option value="">5</option>
    </select>
    <input type="number" name="Goles_equ_local">
    <input type="number" name="Goles_equ_visit">
    <select name="equipo_visit" id="">
        <option value="">1</option>
        <option value="">2</option>
        <option value="">3</option>
        <option value="">4</option>
        <option value="">5</option>
    </select>
    <textarea name="Listado_partidos" id="" cols="30" rows="10"></textarea>
    `
})

Resultados.addEventListener('click', (e) => {
    e.preventDefault();
    document.getElementById('container').innerHTML = `
    <textarea name="Resultados_partidos" id="" cols="30" rows="10"></textarea>
    `
})

