var life = document.getElementById("lifestyle");

var programming = document.getElementById("programming");

var post = document.getElementById("post");

var home = document.getElementById("home");

var about = document.getElementById("about");

var contact = document.getElementById("contact");

home.addEventListener("click", function () {
    $("#post").remove();
});

life.addEventListener('click', createLife, false);

function createLife () {
    
    $('#post').empty();
	
	$("#post").load("includes/lifestyle.php");
}

programming.addEventListener('click', createProg, false);

function createProg () {
    
    $('#post').empty();
	
	$("#post").load("includes/programming.php");
}

about.addEventListener('click', createAbout, false);

function createAbout () {
	
	$('#post').empty();
	
	$("#post").load("includes/about.php");
}

contact.addEventListener('click', createContact, false);

function createContact () {
	
	$('#post').empty();
	
	$("#post").load("includes/contact.php");
}