const Gestion = document.getElementById('gestion');
const Registro = document.getElementById('registro');
const Resultados = document.getElementById('resultados');


Gestion.addEventListener('click', (e) => {
    document.getElementById('container').innerHTML = `
    <form action="">
        <textarea name="Mostrar_Equipos" id="" cols="30" rows="10"></textarea>
        <button>Agregar</button>
        <button>Modificar</button>
        <button>Eliminar</button>
    </form>
    `
})

Registro.addEventListener('click', (e) => {
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
    document.getElementById('container').innerHTML = `
    <textarea name="Resultados_partidos" id="" cols="30" rows="10"></textarea>
    `
})