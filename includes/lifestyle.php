<div id="topic-div">
<h1>Lifestyle</h1>
<div id="posts">

	<div class="post-div">
        <h2>Lorem ipsum dolor sit amet</h2>
		<p>Posted at: <span class="datetime"></span></p>
        <img src="images/lifestyle.jpg" alt="">	
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed arcu in odio pretium facilisis. Aliquam ut libero id justo lobortis faucibus...</p>
        <button class="read-more">Read More</button>	
    </div>
    <div class="post-div">
        <h2>Lorem ipsum dolor sit amet</h2>
		<p>Posted at: <span class="datetime"></span></p>
        <img src="images/lifestyle.jpg" alt="">	
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed arcu in odio pretium facilisis. Aliquam ut libero id justo lobortis faucibus...</p>
        <button class="read-more">Read More</button>	
    </div>
    <div class="post-div">
        <h2>Lorem ipsum dolor sit amet</h2>
		<p>Posted at: <span class="datetime"></span></p>
        <img src="images/lifestyle.jpg" alt="">	
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean sed arcu in odio pretium facilisis. Aliquam ut libero id justo lobortis faucibus...</p>
        <button class="read-more">Read More</button>	
    </div>
	
</div>
	
	<?php include '../includes/sidebar.php';?>
	
	<div class="center">
	  <div class="pagination">
		<a href="#">&laquo;</a>
		<a href="#">1</a>
		<a href="#" class="active">2</a>
		<a href="#">3</a>
		<a href="#">4</a>
		<a href="#">5</a>
		<a href="#">6</a>
		<a href="#">&raquo;</a>
	  </div>
	</div>
	    
    
</div>

<?php include '../includes/popular.php';?>

<script type="text/javascript" src="modal.js"></script>

<script>
	for(i=0; i < 50; i++) {
		var date = new Date();
		var datetime = document.getElementsByClassName("datetime");
		datetime[i].innerHTML = date.toLocaleString();
	}
</script>