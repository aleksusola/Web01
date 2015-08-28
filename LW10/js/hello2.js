var client; 
	
function EnterName() 
{
	client = document.getElementById('name').value;
	if (client == "")
	{
		alert("Enter your name,please!");
		return false;
	}else
	{
		client;
	}
}
function ChangeText()
{
	if (client !== '')
	{
		var zamena = document.getElementById('helloline').innerHTML;
		helloline.innerHTML = " JavaScript is greeting your,"+client+"!"; 
	}else
	{ 
		console.log("Houston you have a problem!");
		return;
	}	
}		
function changeColor() 
{ 
	var r = Math.floor(Math.random() * 256);
	var g = Math.floor(Math.random() * 256);
	var b = Math.floor(Math.random() * 256);
	var rgb = 'rgb(' + r + ',' + g + ',' + b + ')';
	document.getElementById('helloline').style.color = rgb;
}