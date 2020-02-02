let producto;

async function solitudDeProducto(params) {
    const response = await fetch(`../controlador/controlador.php`);
    let solicitud;
    if(res.status >=200 && res.status < 300)
            return await response.json();
    
    construirTienda();
}

function construirTienda() {
    let producto = document.getElementById('producto');
    let estanteria = document.createElement('table');
    let estante = document.createElement('th');
    estante.innerText = 'Nombre';
    let estante2 = document.createElement('th');
    estante2.innerText = 'Precio';
    
    estanteria.appendChild(estante);
    estanteria.appendChild(estante2);

    producto.forEach(element => {
        let tr = document.createElement('tr');
        let td = document.createElement('td');
        td.innerText = element[2];
        let td2 = document.createElement('td');
        td2.innerText = element[2];
        tr.appendChild(td);
        tr.appendChild(td2);
        tabla.appendChild(tr);
    });

    function init() {
        solitudDeProducto();
    }

    window.onload = init;
}