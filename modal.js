var modal = document.getElementById('myModal');		
		
	for ( i=0; i < 50; i++ ) {

		var btn = document.getElementsByClassName("read-more")[i];
		btn.onclick = function() {
		modal.style.display = "block";
	}
}