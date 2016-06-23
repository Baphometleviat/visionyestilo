function crear_variables(){
    var header_material = document.getElementById('header_material');
    
    var materiales_monofocales = document.getElementById('materiales_monofocales');
}

function seleccionar_monofocal(){
    
    header_material.style.display = 'block';
        
    materiales_monofocales.style.display = 'block';
}

function material_bifocalFT(){
    
    header_material.style.display = 'none';
        
    materiales_monofocales.style.display = 'none';
}