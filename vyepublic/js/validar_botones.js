/*function crear_variables(){

	/*Declaración de variables de tipo de lente/
	var monofocal = document.getElementById("monofocal");
	var bifocalFT = document.getElementById("bifocalFT");
	var bifocalInv = document.getElementById("bifocalInv");
	var progresivo = document.getElementById("progresivo");
	var contacto = document.getElementById("contacto");

	/*Declaracion de las variables de materiales/
	var cristal = document.getElementById("cristal");
	var cr = document.getElementById("cr");
	var asferico = document.getElementById("asferico");
	var hi_index = document.getElementById("hi_index");
	var poli = document.getElementById("poli");
	var thin = document.getElementById("thin_and_lite");
	var baush = document.getElementById("baush");
	var cooper = document.getElementById("cooper");
	var jhonson = document.getElementById("jhonson");
	var ciba = document.getElementById("ciba");
	var fresh = document.getElementById("fresh");

	/*Tratamientos/
	var white = document.getElementById("white");
	var anti = document.getElementById("anti");
	var fotocromatico = document.getElementById("fotocromatico");
	var teflon = document.getElementById("teflon");
	var transition = document.getElementById("transition");
	var fotofusion = document.getElementById("fotofusion");
	var polarizado = document.getElementById("polarizado");
	var crizaluv = document.getElementById("crizaluv");
	var tinta = document.getElementById("tinta");
	var esferico = document.getElementById("esferico");
	var torico = document.getElementById("torico");
	var color = document.getElementById("color");

	/*Booleanos/
	var des = true;
	var act = false;
}*/


function habilitar_material(id){

	/*Declaracion de las variables de materiales*/
	var cristal = document.getElementById("cristal");
	var cr = document.getElementById("cr");
	var asferico = document.getElementById("asferico");
	var hi_index = document.getElementById("hi_index");
	var poli = document.getElementById("poli");
	var thin = document.getElementById("thin_and_lite");
	var baush = document.getElementById("baush");
	var cooper = document.getElementById("cooper");
	var jhonson = document.getElementById("jhonson");
	var ciba = document.getElementById("ciba");
	var fresh = document.getElementById("fresh");

	/*Tratamientos*/
	var white = document.getElementById("white");
	var anti = document.getElementById("anti");
	var fotocromatico = document.getElementById("fotocromatico");
	var teflon = document.getElementById("teflon");
	var transition = document.getElementById("transition");
	var fotofusion = document.getElementById("fotofusion");
	var polarizado = document.getElementById("polarizado");
	var crizaluv = document.getElementById("crizaluv");
	var tinta = document.getElementById("tinta");
	var esferico = document.getElementById("esferico");
	var torico = document.getElementById("torico");
	var color = document.getElementById("color");

	/*Booleanos*/
	var des = true;
	var act = false;

	if (id == "monofocal")
	{//If monofocal
			cristal.disabled=act;
			cr.disabled=act;
			asferico.disabled=act;
			hi_index.disabled=act;
			poli.disabled=act;
			thin.disabled=act;
			baush.disabled=des;
			cooper.disabled=des;
			jhonson.disabled=des;
			ciba.disabled=des;
			fresh.disabled=des;

			white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;	
	}//If monofocal
	if (id == "bifocalFT")
	{//If bifocalFT
			cristal.disabled=act;
			cr.disabled=act;
			asferico.disabled=des;
			hi_index.disabled=act;
			poli.disabled=act;
			thin.disabled=des;
			baush.disabled=des;
			cooper.disabled=des;
			jhonson.disabled=des;
			ciba.disabled=des;
			fresh.disabled=des;

			white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
	}//If bifocalFT
	if (id == "bifocalInv")
	{//If BifocalInv
			cristal.disabled=des;
			cr.disabled=des;
			asferico.disabled=des;
			hi_index.disabled=act;
			poli.disabled=des;
			thin.disabled=des;
			baush.disabled=des;
			cooper.disabled=des;
			jhonson.disabled=des;
			ciba.disabled=des;
			fresh.disabled=des;

			white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
	}//If BifocalInv
	if (id == "progresivo")
	{//id Progresivo
			cristal.disabled=des;
			cr.disabled=act;
			asferico.disabled=des;
			hi_index.disabled=act;
			poli.disabled=act;
			thin.disabled=des;
			baush.disabled=des;
			cooper.disabled=des;
			jhonson.disabled=des;
			ciba.disabled=des;
			fresh.disabled=des;

			white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
	}//id Progresivo
	if(id == "contacto")
	{//if contacto
			cristal.disabled=des;
			cr.disabled=des;
			asferico.disabled=des;
			hi_index.disabled=des;
			poli.disabled=des;
			thin.disabled=des;
			baush.disabled=act;
			cooper.disabled=act;
			jhonson.disabled=act;
			ciba.disabled=act;
			fresh.disabled=act;

			white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
	}//if contacto

			cristal.checked=act;
			cr.checked=act;
			asferico.checked=act;
			hi_index.checked=act;
			poli.checked=act;
			thin.checked=act;
			baush.checked=act;
			cooper.checked=act;
			jhonson.checked=act;
			ciba.checked=act;
			fresh.checked=act;

			white.checked= act;
			anti.checked= act;
			fotocromatico.checked= act;
			teflon.checked= act;
			transition.checked= act;
			fotofusion.checked= act;
			polarizado.checked= act;
			crizaluv.checked= act;	
			tinta.checked=act;
			esferico.checked= act;
			torico.checked= act;	
			color.checked=act;
}

function habilitar_tratamiento(id){

	/*Declaración de variables de tipo de lente*/
	var monofocal = document.getElementById("monofocal");
	var bifocalFT = document.getElementById("bifocalFT");
	var bifocalInv = document.getElementById("bifocalInv");
	var progresivo = document.getElementById("progresivo");
	var contacto = document.getElementById("contacto");	

	/*Tratamientos*/
	var white = document.getElementById("white");
	var anti = document.getElementById("anti");
	var fotocromatico = document.getElementById("fotocromatico");
	var teflon = document.getElementById("teflon");
	var transition = document.getElementById("transition");
	var fotofusion = document.getElementById("fotofusion");
	var polarizado = document.getElementById("polarizado");
	var crizaluv = document.getElementById("crizaluv");
	var tinta = document.getElementById("tinta");
	var esferico = document.getElementById("esferico");
	var torico = document.getElementById("torico");
	var color = document.getElementById("color");

	/*Booleanos*/
	var des = true;
	var act = false;

	if (id == "cristal")
	{//if cristal
		if (bifocalFT.checked)
		{//If bifocalFT
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//If bifocalFT
		if (monofocal.checked)
		{//if mono
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= act;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//if mono
	}//if cristal
	if (id == "cr")
	{//If cr
		if (bifocalFT.checked)
		{//If cr
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=act;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//If cr
		if (progresivo.checked)
		{//if progresivo
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//if progresivo
	}//If cr

	if (id == "hi_index")
	{//If HiIndex
		if (bifocalFT.checked)
		{//if bifocalFT
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//if biifocalFT
		if (bifocalInv.checked)
		{//if bifocalInv
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= act;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//if bifocalInv
		if (progresivo.checked)
		{
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}
	}//If HIIndex
    
    if(id == "poli")
    {//If Poli
        if(bifocalFT.checked)
        {//if bifocal FT
            white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled=des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
        }//if bifocal FT
        if (progresivo.checked)
		{//if progre
			white.disabled= act;
			anti.disabled= act;
			fotocromatico.disabled= act;
			teflon.disabled= act;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= des;
			torico.disabled= des;	
			color.disabled=des;
		}//if progre
    }//If Poli
    
    if(id == "baush")
    {//id baush
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= act;	
			color.disabled=act;
        }
    }//id baush
    
    if(id == "cooper")
    {//id cooper
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= act;	
			color.disabled=des;
        }
    }//id cooper
    
    if(id == "baush")
    {//id baush
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= act;	
			color.disabled=act;
        }
    }//id baush
    
    if(id == "jhonson")
    {//id jhonson
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= act;	
			color.disabled=des;
        }
    }//id jhonson
    
    if(id == "ciba")
    {//id ciba
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= act;	
			color.disabled=des;
        }
    }//id ciba
    
    if(id == "fresh")
    {//id fresh
        if(contacto.checked)
        {
            white.disabled= des;
			anti.disabled= des;
			fotocromatico.disabled= des;
			teflon.disabled= des;
			transition.disabled= des;
			fotofusion.disabled= des;
			polarizado.disabled= des;
			crizaluv.disabled= des;	
			tinta.disabled= des;
			esferico.disabled= act;
			torico.disabled= des;	
			color.disabled= act;
        }
    }//id fresh
        
            white.checked= act;
			anti.checked= act;
			fotocromatico.checked= act;
			teflon.checked= act;
			transition.checked= act;
			fotofusion.checked= act;
			polarizado.checked= act;
			crizaluv.checked= act;	
			tinta.checked=act;
			esferico.checked= act;
			torico.checked= act;	
			color.checked=act;
    
}

function desactivar_todo(){
            
    
    /*Declaracion de las variables de materiales*/
	var cristal = document.getElementById("cristal");
	var cr = document.getElementById("cr");
	var asferico = document.getElementById("asferico");
	var hi_index = document.getElementById("hi_index");
	var poli = document.getElementById("poli");
	var thin = document.getElementById("thin_and_lite");
	var baush = document.getElementById("baush");
	var cooper = document.getElementById("cooper");
	var jhonson = document.getElementById("jhonson");
	var ciba = document.getElementById("ciba");
	var fresh = document.getElementById("fresh");
    
	/*Tratamientos*/
	var white = document.getElementById("white");
	var anti = document.getElementById("anti");
	var fotocromatico = document.getElementById("fotocromatico");
	var teflon = document.getElementById("teflon");
	var transition = document.getElementById("transition");
	var fotofusion = document.getElementById("fotofusion");
	var polarizado = document.getElementById("polarizado");
	var crizaluv = document.getElementById("crizaluv");
	var tinta = document.getElementById("tinta");
	var esferico = document.getElementById("esferico");
	var torico = document.getElementById("torico");
	var color = document.getElementById("color");
        
    /*Booleanos*/
	var des = true;	
        
    cristal.disabled=des;
    cr.disabled=des;
	asferico.disabled=des;
	hi_index.disabled=des;
	poli.disabled=des;
	thin.disabled=des;
	baush.disabled=des;
	cooper.disabled=des;
	jhonson.disabled=des;
	ciba.disabled=des;
	fresh.disabled=des;

    white.disabled= des;
	anti.disabled= des;
	fotocromatico.disabled= des;
	teflon.disabled= des;
	transition.disabled= des;
	fotofusion.disabled= des;
	polarizado.disabled= des;
	crizaluv.disabled= des;	
	tinta.disabled=des;
	esferico.disabled= des;
	torico.disabled= des;	
	color.disabled=des;
    
}
/*act = false 
  des = true
*/