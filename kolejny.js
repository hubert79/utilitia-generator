// kolejny

function kolejny(){
		
		var durl = document.createElement('input');
			durl.setAttribute('value', 'url');
			durl.setAttribute('type', 'text');
			durl.setAttribute('id', 'idurllink');
			durl.setAttribute('name', 'plik[]');
			durl.className = 'upload';
			var kontener = document.getElementById('dodurl');
			kontener.appendChild(durl);
	}