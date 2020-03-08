var list = document.getElementsByTagName("li");
// create a "close button" and append to each li
for (var i = 0; i < list.length; i++) {
	var span = document.createElement("span");
	var txt = document.createTextNode("\u00D7");
	span.className = "close";
	span.appendChild(txt);
	list[i].appendChild(span);
}

// click on span to close 
var close = document.getElementsByClassName("close");
for (var i = 0; i < close.length; i++) {
	close[i].onclick = function() {
		var div = this.parentElement;
		div.style.display = "none"
	}
}

// add function
function add() {
	var value = document.getElementById("text").value;
	if (value === "") {

	} else {
		var li = document.createElement("li");
		li.innerHTML = value;
		var ul = document.getElementById("list");
		ul.appendChild(li);

		var span = document.createElement("span");
	var txt = document.createTextNode("\u00D7");
	span.className = "close";
	span.appendChild(txt);
	li.appendChild(span);

	for (var i = 0; i < close.length; i++) {
	close[i].onclick = function() {
		var div = this.parentElement;
		div.style.display = "none"
	}
}

	}

}