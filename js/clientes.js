"use strict"

document.addEventListener('DOMContentLoaded', function(){
    llamarDatos();
})

function llamarDatos() {
    const btnLogin = document.getElementById('boton');
    btnLogin.addEventListener('click', obtenerClientes)    
}

async function obtenerClientes(){
    const url = "data/clientes.php?accion=listar";
    const respuesta = await fetch(url);
    const resultado = await respuesta.json();
    if(resultado.codigo === 200){
           swal({
        icon: 'success',
        title: 'Listo...',
        text: 'Listado Correctamente!',
        footer: '<a href="">owo</a>'
      });
        const data = resultado.data;
        let datos = "";
        data.forEach(cliente => {
            datos += "<tr>";
            datos += "<td>" + cliente.id + "</td>";
            datos += "<td>" + cliente.razon_social + "</td>";
            datos += "<td>" + cliente.nombre + "</td>";
            datos += "<td>" + cliente.numero_documento + "</td>";
            datos += "<td>" + cliente.direccion + "</td>";
            datos += "</tr>";
        });
        const tabla = document.getElementById("tablaBody");
        tabla.innerHTML = datos
    }
}