function cargar(div, desde)
		{
			event.preventDefault();
			var steamacc_s = $('#steamacc').val();
			var steamacc = steamacc_s.split('/');
     		$(div).load(desde+'?steamacc='+steamacc[4]);
		}
