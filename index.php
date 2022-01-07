
  <?php
    $title = "Home";
    include 'includes/header.php';
  ?>

	<link rel="stylesheet" type="text/css" href="style/tv.css"><br>
  <br>
	<div class="slideshow-container">
	 <div id="slide-show">
	 	<div class="mySlides fade">
             <img src="images/movie1.jpg" style="width:100%">
              <div class="text">Watu wote</div>
        </div>

        <div class="mySlides fade">
            <img src="images/movie2.jpg" style="width:100%" >
            <div class="text">Disconnect</div>
        </div>

        <div class="mySlides fade">
             <img src="images/movie3.jpg" style="width:100%" >
             <div class="text">Our turn to eat</div>
        </div>

        <div style="text-align:center">
               <span class="dot" onclick="currentSlide(1)"></span>
               <span class="dot" onclick="currentSlide(2)"></span>
               <span class="dot" onclick="currentSlide(3)"></span>
        </div>
	 </div>
	</div>
	  <!--script for automatic slider-->
	    <script type="text/javascript">
	       var slideIndex = 0;
         showSlides();

         function showSlides() {
         var i;
         var slides = document.getElementsByClassName("mySlides");
          for (i = 0; i < slides.length; i++) {
             slides[i].style.display = "none";
          }
           slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}
            slides[slideIndex-1].style.display = "block";
             setTimeout(showSlides, 2000); // Change image every 2 seconds
          }   
      </script>
<!--end of slider-->

<!--trailer begind-->
	<div class="heading">
          <h2>TRAILERS</h2>
          <p class="text-right"><a href="userlogin.php">See all</a></p>
  </div>

  <div class="shell">
		<div id="trailer">
			<div class="banner">
				<img src="images/tr13.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
			<div class="banner">
				<img src="images/tr12.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
			<div class="banner">
				<img src="images/tr3.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
			<div class="banner">
				<img src="images/tr4.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
			<div class="banner">
				<img src="images/tr18.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
			<div class="banner">
				<img src="images/tr5.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
			</div>
		</div>
	</div>
    <!--end of trailers-->
  <div class="heading">
          <h2>Trending</h2>
          <p class="text-right"><a href="userlogin.php">See all</a></p>
  </div>

  <div class="shell">
    <div id="trending">
      <div class="banner">
        <img src="images/tr6.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr7.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr8.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr9.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr10.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr11.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
    </div>
  </div>
  <!--end of trending-->

  <!--tv shows begins-->
  <div class="heading">
          <h2>TvShows</h2>
          <p class="text-right"><a href="userlogin.php">See all</a></p>
  </div>

  <div class="shell">
    <div id="tvshows">
      <div class="banner">
        <img src="images/tr1.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr2.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr14.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr15.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr16.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
      <div class="banner">
        <img src="images/tr17.jpeg">
        <p><a href="userlogin.php">Watch Trailer</a></p>
      </div>
    </div>
  </div>
  <!--end of tvshows-->
<?php
  include 'includes/footer.php';
?>  