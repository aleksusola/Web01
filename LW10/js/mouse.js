var MouseCoords = {
	// X-координата
	getX : function (e) {
		if (e.pageX) {
			return e.pageX;
		} else if (e.clientX) {
			return e.clientX + (document.documentElement.scrollLeft || document.body.scrollLeft) - document.documentElement.clientLeft;
		}
		return 0;
	},

	// Y-координата
	getY : function (e) {
		if (e.pageY) {
			return e.pageY;
		} else if (e.clientY) {
			return e.clientY + (document.documentElement.scrollTop || document.body.scrollTop) - document.documentElement.clientTop;
		}
		return 0;
	}
}
document.onmousemove = function (e) {
	if (!e)
		e = window.event;

	var mouseCoordsLayer = document.getElementById('mouse_coords_on_move');
	mouseCoordsLayer.innerHTML = '<h2>Координаты во время движения</h2>';
	mouseCoordsLayer.innerHTML += '<p>X: ' + MouseCoords.getX(e) + '</p>';
	mouseCoordsLayer.innerHTML += '<p>Y: ' + MouseCoords.getY(e) + '</p>';
}
