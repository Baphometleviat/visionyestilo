function crear_variables(){
    
    /*CREACION DE VARIABLES DE LOS DIVS*/
    var header_material = document.getElementById('header_material');    
    var materiales_monofocales = document.getElementById('materiales_monofocales');
    var materiales_bifocalFT = document.getElementById('materiales_bifocalFT');
    var materiales_bifocalInv = document.getElementById('materiales_bifocalInv');
    var materiales_progresivos = document.getElementById('materiales_progresivos');
    var materiales_contacto = document.getElementById('materiales_contacto');
    /*CREACION DE VARIABLES DE LOS DIVS*/    
}

function mantener_header_material(){
    header_material.style.display = 'block';
}

function quitar_header_material(){
    header_material.style.display = 'none';
}

function desplegar_monofocal(){
    
    mantener_header_material();
    materiales_monofocales.style.display = 'block';
    materiales_bifocalFT.style.display = 'none';
    materiales_bifocalInv.style.display = 'none';
    materiales_progresivos.style.display = 'none';
    materiales_contacto.style.display = 'none';
    
}

function desplegar_bifocalFT(){
    
    mantener_header_material();
    materiales_monofocales.style.display = 'none';
    materiales_bifocalFT.style.display = 'block';
    materiales_bifocalInv.style.display = 'none';
    materiales_progresivos.style.display = 'none';
    materiales_contacto.style.display = 'none';
}

function desplegar_bifocalInv(){
    
    mantener_header_material();
    materiales_monofocales.style.display = 'none';
    materiales_bifocalFT.style.display = 'none';
    materiales_bifocalInv.style.display = 'block';
    materiales_progresivos.style.display = 'none';
    materiales_contacto.style.display = 'none';
}

function desplegar_progresivo(){
    
    mantener_header_material();
    materiales_monofocales.style.display = 'none';
    materiales_bifocalFT.style.display = 'none';
    materiales_bifocalInv.style.display = 'none';
    materiales_progresivos.style.display = 'block';
    materiales_contacto.style.display = 'none';
}

function desplegar_contacto(){
    
    mantener_header_material();
    materiales_monofocales.style.display = 'none';
    materiales_bifocalFT.style.display = 'none';
    materiales_bifocalInv.style.display = 'none';
    materiales_progresivos.style.display = 'none';
    materiales_contacto.style.display = 'block';
}