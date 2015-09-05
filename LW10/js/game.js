var m = 0;

function hod() {
	m++;
	document.getElementById("steps").innerHTML = "Ходов:    " + m;
}

function igra(ev) {
	var e = ev || window.event,
	o = e.target || e.srcElement;
	if (o.tagName != 'INPUT')
		return;
	var obj = document.getElementById('num8'),
	btn = obj.getElementsByTagName('input');
	for (var sos = o.lang.split('-'), j = k = 0, lj = sos.length; j < lj; j++)
		if (btn[sos[j]].value < 0) {
			k = 1;
			break
		}
	if (!k)
		return;
	btn[sos[j]].style.visibility = 'visible';
	btn[sos[j]].value = o.value;
	o.style.visibility = 'hidden';
	o.value = -1;
	hod();
	for (var j = 0; j < 8; j++)
		if (btn[j].value != j + 1)
			return;
	obj.onclick = null;
	alert('Головоломка решена!');
}

function start_game() {
	document.getElementById('start').style.display = "none";
	document.getElementById('reset').style.display = "block";
	document.getElementById('steps').style.display = "block";

	(function game() {
		var shb = document.createElement('input');
		shb.type = 'button';
		shb.style.cssText = 'height: 123px; width: 123px; font-weight: bold; font-size: 40px ';
		for (var obj = document.getElementById('num8'), btn = new Array(), j = 0; j < 9; j++) {
			btn[j] = obj.appendChild(shb.cloneNode(1));
			if (!((j + 1) % 3))
				obj.appendChild(document.createElement('br'));
		}
		btn[j - 1].style.visibility = 'hidden';
		btn[j - 1].value = -1;
		var rnd = new Array(),
		rsh = 1;
		obj.onclick = igra;
		while (rsh % 2) {
			for (var j = 0; j < 8; j++)
				rnd[j] = j + 1;
			rnd.sort(new Function('x', 'y', 'return Math.random () - Math.random ()'));
			for (var rsh = j = 0; j < 7; rsh += s, j++)
				for (var s = 0, k = j + 1; k < 8; k++)
					if (rnd[k] < rnd[j])
						s++;
		}
		for (var j = 0; j < 9; j++) {
			if (j < 8)
				btn[j].value = rnd[j];
			var lng = new Array();
			if (j - 1 >= 0 && j % 3)
				lng[lng.length] = j - 1;

			if (j + 1 < 9 && (j + 1) % 3)
				lng[lng.length] = j + 1;

			if (j - 3 >= 0)
				lng[lng.length] = j - 3;

			if (j + 3 < 9)
				lng[lng.length] = j + 3;

			btn[j].lang = lng.sort().join('-');
		}

	})();
}
