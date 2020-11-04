// statusDropDown

var akcja = 0; /*Określa czy dodatkowe formularza są już widoczne, aby uniknąć sytuacji dokładania dodatkowych pol*/
        
		// task = 1 - zgodny
		// task = 0 - Niezgodny, częsciowo zgodny

function statusDropDown(kontener, kontenerlab, kontener2, kontener2lab, kontener3, kontener3lab,  task){

	if(task == false ){
		if (akcja == 0){
		
		var cala = document.createElement('LABEL');
			//cal.className = 'upload';
			cala.setAttribute('for', 'ca');
			cala.setAttribute('id', 'calabel');
			cala.innerHTML = "Opis treści niedostępnej";
			var contener = document.getElementById(kontenerlab);
			contener.appendChild(cala);
		
		var trescniedostepna = document.createElement('input');
			trescniedostepna.setAttribute('type', 'text');
			trescniedostepna.setAttribute('id', 'ca');
			trescniedostepna.setAttribute('name', 'plik[]');
			trescniedostepna.className = 'upload';
			var kontener = document.getElementById(kontener);
			kontener.appendChild(trescniedostepna);

		var wyl = document.createElement('LABEL');
			//cal.className = 'upload';
			wyl.setAttribute('for', 'w');
			wyl.setAttribute('id', 'wlab');
			wyl.innerHTML = "Opis wyłączeń";
			var kontener = document.getElementById(kontener2lab);
			kontener.appendChild(wyl);

		var wylaczenia = document.createElement('input');
			wylaczenia.setAttribute('type', 'text');
			wylaczenia.setAttribute('id', 'w');
			wylaczenia.setAttribute('name', 'plik[]');
			wylaczenia.className = 'upload';
			var kontener = document.getElementById(kontener2);
			kontener.appendChild(wylaczenia);

		var lb = document.createElement('LABEL');
			//cal.className = 'upload';
			lb.setAttribute('for', 'o');
			lb.setAttribute('id', 'llab');
			lb.innerHTML = "Linki";
			var kontener = document.getElementById(kontener3lab);
			kontener.appendChild(lb);

		var link = document.createElement('input');
			link.setAttribute('type', 'text');
			link.setAttribute('id', 'o');
			link.setAttribute('name', 'plik[]');
			link.className = 'upload';
			var kontener = document.getElementById(kontener3);
			kontener.appendChild(link);
			
			akcja = 1;
		}
		
	}
	else if(task == true){
		if (akcja == 1){
			var e1 = document.getElementById('calabel');
			var e2 = document.getElementById('ca');
			var e3 = document.getElementById('wlab');
			var e4 = document.getElementById('w');
			var e5 = document.getElementById('llab');
			var e6 = document.getElementById('o');
			
			e1.remove();
			e2.remove();
			e3.remove();
			e4.remove();
			e5.remove();
			e6.remove();
			
			akcja = 0;
		}
	}
}
var zadanie = 0;
	function extermalEntity(kon,konlab,  down){
		// nameExtermalEntityLabel
		if(down == false){
			if (zadanie == 0){
			
		var enlab = document.createElement('LABEL');
			//cal.className = 'upload';
			enlab.setAttribute('for', 'npz');
			enlab.setAttribute('id', 'enlabel');
			enlab.innerHTML = "Nazwa podmiotu zewnętrznego";
			var contener = document.getElementById(kon);
			contener.appendChild(enlab);
			
		var nazwapodzew = document.createElement('input');
			nazwapodzew.setAttribute('type', 'text');
			nazwapodzew.setAttribute('id', 'npz');
			nazwapodzew.setAttribute('name', 'plik[]');
			nazwapodzew.className = 'upload';
			var kontener = document.getElementById(konlab);
			kontener.appendChild(nazwapodzew);
			zadanie = 1;
			}
		} 
		else if(down == true){
			if(zadanie == 1){
				var element1 = document.getElementById('enlabel');
				var element2 = document.getElementById('npz');
				
				element1.remove();
				element2.remove();
				
				zadanie = 0;
			}
			
		}
	}