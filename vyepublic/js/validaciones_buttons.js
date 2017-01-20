	function habilitar_material(id) {
		if (id == "monofocal"){			

			//Enabled
			document.getElementById("cristal").disabled=false;
			document.getElementById("cr").disabled=false;
			document.getElementById("asferico").disabled=false;
			document.getElementById("hi_index").disabled=false;
			document.getElementById("poli").disabled=false;
			document.getElementById("thin_and_lite").disabled=false;
			document.getElementById("baush").disabled=true;
			document.getElementById("cooper").disabled=true;
			document.getElementById("jhonson").disabled=true;
			document.getElementById("ciba").disabled=true;
			document.getElementById("fresh").disabled=true;

			document.getElementById("white").disabled= true;
			document.getElementById("anti").disabled= true;
			document.getElementById("fotocromatico").disabled= true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;	
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;	
			document.getElementById("color").disabled=true;


		};//IFMONOFOCAL
		if (id == "bifocalFT") {

			var cristal = document.getElementById("cristal");
			//Enabled
			cristal.disabled=false;
			document.getElementById("cr").disabled=false;
			document.getElementById("asferico").disabled=true;
			document.getElementById("hi_index").disabled=false;
			document.getElementById("poli").disabled=false;
			document.getElementById("thin_and_lite").disabled=true;
			document.getElementById("baush").disabled=true;
			document.getElementById("cooper").disabled=true;
			document.getElementById("jhonson").disabled=true;
			document.getElementById("ciba").disabled=true;
			document.getElementById("fresh").disabled=true;

			document.getElementById("white").disabled= true;
			document.getElementById("anti").disabled= true;
			document.getElementById("fotocromatico").disabled= true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;	
			document.getElementById("color").disabled=true;


		};//IF BIFOCALFT
		if (id == "bifocalInv") {

			//Enabled
			document.getElementById("cristal").disabled=true;
			document.getElementById("cr").disabled=true;
			document.getElementById("asferico").disabled=true;
			document.getElementById("hi_index").disabled=false;
			document.getElementById("poli").disabled=true;
			document.getElementById("thin_and_lite").disabled=true;
			document.getElementById("baush").disabled=true;
			document.getElementById("cooper").disabled=true;
			document.getElementById("jhonson").disabled=true;
			document.getElementById("ciba").disabled=true;
			document.getElementById("fresh").disabled=true;

			document.getElementById("white").disabled= true;
			document.getElementById("anti").disabled= true;
			document.getElementById("fotocromatico").disabled= true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;	
			document.getElementById("color").disabled=true;

		};//IF BIFOCAL INV
		if (id == "progresivo") {

			//Enabled
			document.getElementById("cristal").disabled=true;
			document.getElementById("cr").disabled=false;
			document.getElementById("asferico").disabled=true;
			document.getElementById("hi_index").disabled=false;
			document.getElementById("poli").disabled=false;
			document.getElementById("thin_and_lite").disabled=true;
			document.getElementById("baush").disabled=true;
			document.getElementById("cooper").disabled=true;
			document.getElementById("jhonson").disabled=true;
			document.getElementById("ciba").disabled=true;
			document.getElementById("fresh").disabled=true;

			document.getElementById("white").disabled= true;
			document.getElementById("anti").disabled= true;
			document.getElementById("fotocromatico").disabled= true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;	
			document.getElementById("color").disabled=true;

			
			
		};//IF PROGRESIVO
		if (id == "contacto") {

			//Enabled
			document.getElementById("cristal").disabled=true;
			document.getElementById("cr").disabled=true;
			document.getElementById("asferico").disabled=true;
			document.getElementById("hi_index").disabled=true;
			document.getElementById("poli").disabled=true;
			document.getElementById("thin_and_lite").disabled=true;
			document.getElementById("baush").disabled=false;
			document.getElementById("cooper").disabled=false;
			document.getElementById("jhonson").disabled=false;
			document.getElementById("ciba").disabled=false;
			document.getElementById("fresh").disabled=false;
			
		};
		
			document.getElementById("cristal").checked= false;
			document.getElementById("cr").checked= false;
			document.getElementById("asferico").checked= false;
			document.getElementById("hi_index").checked= false;
			document.getElementById("poli").checked= false;
			document.getElementById("thin_and_lite").checked= false;
			document.getElementById("baush").checked= false;
			document.getElementById("cooper").checked= false;
			document.getElementById("jhonson").checked= false;
			document.getElementById("ciba").checked= false;
			document.getElementById("fresh").checked= false;

			document.getElementById("white").checked= false;
			document.getElementById("anti").checked= false;
			document.getElementById("fotocromatico").checked= false;
			document.getElementById("teflon").checked= false;
			document.getElementById("transition").checked= false;
			document.getElementById("fotofusion").checked= false;
			document.getElementById("polarizado").checked= false;
			document.getElementById("crizaluv").checked= false;
			document.getElementById("esferico").checked= false;
			document.getElementById("toico").checked= false;
			document.getElementById("color").checked= false;

}

function habilitar_tratamiento(id) {

	if (id == "cristal") {
		if (document.getElementById("bifocalFT").checked) {
			//Disabled
			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
		if (document.getElementById("monofocal").checked) {
			//Disabled
			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= false;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
	};

	if (id == "cr") {
		if (document.getElementById("bifocalFT").checked) {

			//Disabled
			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=false;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;

		};
		if (document.getElementById("progresivo").checked) {

			//Disabled
			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
	};

	if (id == "hi_index") {
		if (document.getElementById("bifocalFT").checked) {

			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
		if (document.getElementById("bifocalInv").checked) {

			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=false;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
		if (document.getElementById("progresivo").checked) {

			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
	};

	if (id == "poli") {
		if (document.getElementById("bifocalFT").checked) {

			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};

		if (document.getElementById("progresivo").checked) {

			document.getElementById("white").disabled = false;
			document.getElementById("anti").disabled = false;
			document.getElementById("fotocromatico").disabled = false;
			document.getElementById("teflon").disabled= false;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= false;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= true;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=true;
		};
	};

	if (id == "baush") {
			if (document.getElementById("contacto").checked) {

			document.getElementById("white").disabled = true;
			document.getElementById("anti").disabled = true;
			document.getElementById("fotocromatico").disabled = true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= false;
			document.getElementById("tonico").disabled= false;
			document.getElementById("color").disabled=false;
			};			
	};

	if (id == "cooper") {
			if (document.getElementById("contacto").checked) {

			document.getElementById("white").disabled = true;
			document.getElementById("anti").disabled = true;
			document.getElementById("fotocromatico").disabled = true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= false;
			document.getElementById("tonico").disabled= false;
			document.getElementById("color").disabled=true;
			};			
	};

	if (id == "jhonson") {
			if (document.getElementById("contacto").checked) {

			document.getElementById("white").disabled = true;
			document.getElementById("anti").disabled = true;
			document.getElementById("fotocromatico").disabled = true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= false;
			document.getElementById("tonico").disabled= false;
			document.getElementById("color").disabled=true;
			};			
	};	

	if (id == "ciba") {
			if (document.getElementById("contacto").checked) {

			document.getElementById("white").disabled = true;
			document.getElementById("anti").disabled = true;
			document.getElementById("fotocromatico").disabled = true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= false;
			document.getElementById("tonico").disabled= false;
			document.getElementById("color").disabled=true;
			};			
	};	

	if (id == "fresh") {
			if (document.getElementById("contacto").checked) {

			document.getElementById("white").disabled = true;
			document.getElementById("anti").disabled = true;
			document.getElementById("fotocromatico").disabled = true;
			document.getElementById("teflon").disabled= true;
			document.getElementById("transition").disabled= true;
			document.getElementById("fotofusion").disabled= true;
			document.getElementById("polarizado").disabled= true;
			document.getElementById("crizaluv").disabled= true;
			document.getElementById("tinta").disabled=true;
			document.getElementById("esferico").disabled= false;
			document.getElementById("tonico").disabled= true;
			document.getElementById("color").disabled=false;
			};			
	};	

			document.getElementById("white").checked= false;
			document.getElementById("anti").checked= false;
			document.getElementById("fotocromatico").checked= false;
			document.getElementById("teflon").checked= false;
			document.getElementById("transition").checked= false;
			document.getElementById("fotofusion").checked= false;
			document.getElementById("polarizado").checked= false;
			document.getElementById("crizaluv").checked= false;			
			document.getElementById("esferico").checked= false;
			document.getElementById("tonico").checked= false;
			document.getElementById("color").checked= false;
}

function disabled_all() {
	
}