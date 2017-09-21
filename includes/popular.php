<h2>Popular posts</h2>
<div id="popular">
     <div class="popular-div">
        <img src="images/lifestyle.jpg" alt="">	
        <p>Posted at: <span class="datetime"></span></p>
        <div class="caption">Lorem ipsum dolor sit amet</div>
    </div>
    <div class="popular-div">
        
        <img src="images/coding.jpg" alt="">	
        <p>Posted at: <span class="datetime"></span></p>
        <div class="caption">Lorem ipsum dolor sit amet</div>
    </div>
    <div class="popular-div">
        
        <img src="images/lifestyle.jpg" alt="">	
        <p>Posted at: <span class="datetime"></span></p>
        <div class="caption">Lorem ipsum dolor sit amet</div>
    </div>
    
    <div class="popular-div">
       
        <img src="images/coding.jpg" alt="">	
        <p>Posted at: <span class="datetime"></span></p>
        <div class="caption">Lorem ipsum dolor sit amet</div>
    </div>
</div>

<script type="text/javascript">
	
 $(document).ready(function(){
	 
                  $('#popular').slick({
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    autoplay: true,
                    autoplaySpeed: 2000,
                    nextArrow: false,
                    prevArrow: false,
					responsive: [
						{
							breakpoint: 1024,
							settings: {
								slidesToShow: 2
							}
						},
						
						{
							breakpoint: 769,
							settings: {
								slidesToShow: 1
							}
						}
					]
                    
                  });
                });
	
</script>