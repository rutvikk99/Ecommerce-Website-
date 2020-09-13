<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    $user = "";
    $login = "Log in";
    $link = "login.php";
  }
else{
    $user = $_SESSION["username"];
    $login = "Logout";
    $link = "logout.php";
  }
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width ,initial-scale=1.0 ">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

        <title> Food Express </title>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        
        
    </head>
    <!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
    function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->








      <body>
        <!-- header for the website -->
        <div class="agileits_header">
          <div class="container">
              <div class="w3l_offers">
                  <p>SALE UP TO 70% OFF. USE CODE "SALE70%" . <a href="products.html">SHOP NOW</a></p>
              </div>

      <div class="w3l_search">
        <form action="#" method="post">
          <input type="search" name="Search" placeholder="Search for a Product..." required="">
          <button type="submit" class="btn btn-default search" aria-label="Left Align">
            <i class="fa fa-search" aria-hidden="true"> </i>
          </button>
          <div class="clearfix"></div>
        </form>
      </div>
              <div class="product_list_header">  
                      <form action="#" method="post" class="last"> 
                          <input type="hidden" name="cmd" value="_cart">
                          <input type="hidden" name="display" value="1">
                          <button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></button>
                      </form>  
              </div>
              <div class="clearfix"> </div>
          </div>
      </div>
  
                <header class="text-gray-700 body-font">
                    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
                      <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                        <img href="index.php" src="ff.png" alt="food express" width="200" height="200">
                          
                      
                        
                      </a>
                      <nav class="md:mr-auto md:ml-4 md:py-3 md:pl-4 md:border-l md:border-gray-700	flex flex-wrap items-center text-base justify-center ">
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="index.php" class="mr-5 hover:text-gray-900">Home</a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="menu.php" class="mr-5 hover:text-gray-900">Menu</a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="<?php echo htmlspecialchars($link); ?>" class="mr-5 hover:text-gray-900"><?php echo htmlspecialchars($login); ?></a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="offers.php" class="mr-5 hover:text-gray-900">Offers</a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="help.php" class="mr-5 hover:text-gray-900">Help</a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><a href="about.php" class="mr-5 hover:text-gray-900">About Us</a></button>
                        <button class="inline-flex text-black bg-yellow-00 border-0 py-3 px-5 focus:outline-none hover:bg-green-200 rounded text-lg"><b><?php echo htmlspecialchars($user); ?></b></button>
                      </nav>
                      
                    </div>
        
                  </header>
                <!-- header over -->

<!-- //navigation -->
<!-- breadcrumbs -->
            <div class="breadcrumbs">
    <div class="container">
        <ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
            <li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
            <li class="active">About Us</li>
        </ol>
    </div>
            </div>
<!-- //breadcrumbs -->
<!DOCTYPE html>
<html lang="en">
<title>F</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>


<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- Automatic Slideshow Images -->
  <div class="mySlides w3-display-container w3-center">
    <img src="1.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Fruits</h3>
      <p><b>We have finest quality of fruits!!</b></p>   
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="2.jpg" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Veggies</h3>
      <p><b>Straight from organic farms.</b></p>    
    </div>
  </div>
  <div class="mySlides w3-display-container w3-center">
    <img src="fruit.png" style="width:100%">
    <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-32 w3-hide-small">
      <h3>Spices</h3>
      <p><b>You hear India, We hear Spices along with it.</b></p>    
    </div>
  </div>

  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide"><i><b>Food Express</b></h2>
    <p class="w3-opacity"><i>We love Shopping</i></p>
    <p class="w3-justify">Food Express is Kaman’s largest online food and grocery store. With over 18,000 products and over a 100 brands in our catalogue you will find everything you are looking for. Right from fresh Fruits and Vegetables, Rice and Dals, Spices and Seasonings to Packaged products – we have it all.
Choose from a wide range of options in every category, exclusively handpicked to help you find the best quality available at the lowest prices. Select a time slot for delivery and your order will be delivered right to your doorstep, anywhere in Kaman, Poman, Chinchoti, Vasai, Dongripada and College Canteen. You can pay online using your debit / credit card or by cash / sodexo on delivery.
We guarantee on time delivery, and the best quality!
<br>Happy Shopping :) </p>
    




  <!-- The Contact Section -->
  <div class="w3-container w3-content w3-padding-64" style="max-width:800px" id="contact">
    <h2 class="w3-wide w3-center">CONTACT</h2>
    <p class="w3-opacity w3-center"><i>Feedback? Drop a note!</i></p>
    <div class="w3-row w3-padding-32">
      <div class="w3-col m6 w3-large w3-margin-bottom">
        <i class="fa fa-map-marker" style="width:30px"></i> Kaman, Vasai (E)<br>
        <i class="fa fa-phone" style="width:30px"></i> Phone: +91 00000 11111<br>
        <i class="fa fa-envelope" style="width:30px"> </i> Email: info@foodexpress.com<br>
      </div>
      <div class="w3-col m6">
        <form action="/action_page.php" target="_blank">
          <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
            </div>
            <div class="w3-half">
              <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
            </div>
          </div>
          <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
          <button class="w3-button w3-black w3-section w3-right" type="submit">SEND</button>
        </form>
      </div>
    </div>
  </div>



<section class="text-gray-700 body-font">

  <div class="container px-6 py-24 mx-auto">
    <div class="flex flex-wrap -m-4">
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="p1.png">
          <p class="leading-relaxed">"It really saves me time and effort. website is exactly what our business has been lacking. Website is awesome! Website has really helped our business."</p>
          <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Karan Parmar</h2>
          <p class="text-gray-500">Senior Developer</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 mb-6 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="p2.jpg">
          <p class="leading-relaxed">"We can't understand how we've been living without website. Absolutely wonderful! Definitely worth the investment. Website is the most valuable business resource we have EVER purchased."</p>
          <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Yogesh Chaudhary</h2>
          <p class="text-gray-500">Senior Developer</p>
        </div>
      </div>
      <div class="lg:w-1/3 lg:mb-0 p-4">
        <div class="h-full text-center">
          <img alt="testimonial" class="w-20 h-20 mb-8 object-cover object-center rounded-full inline-block border-2 border-gray-200 bg-gray-100" src="p3.png">
          <p class="leading-relaxed">"Without website, we would have gone bankrupt by now. Definitely worth the investment. Website has really helped our business.</p>
          <span class="inline-block h-1 w-10 rounded bg-purple-500 mt-6 mb-4"></span>
          <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Rutvik Kacchhi</h2>
          <p class="text-gray-500">Senior Developer</p>
        </div>
      </div>
    </div>
  </div>
</section>

  
<!-- End Page Content -->
</div>


<script>
// Automatic Slideshow - change image every 2 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>



        <!-- //footer -->	
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- top-header and slider -->
<!-- here stars scrolling icon -->
	        <script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	        </script>
<!-- //here ends scrolling icon -->
<script src="js/minicart.min.js"></script>
            <script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
            </script>
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
            <script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
            </script>	
<!-- //main slider-banner -->





        <!-- footer -->

            <div class="bg-gray-200">
              <div class="container px-5 py-6 mx-auto flex items-center sm:flex-row flex-col">
                <a class="flex title-font font-medium items-center md:justify-start justify-center text-gray-900">
                  <img src="ff.png" alt="food express" width="200" height="200"> 
                  <span class="ml-3 text-xl">FoodExpress</span>
                </a>
                <p class="text-sm text-gray-500 sm:ml-6 sm:mt-0 mt-4">© 2020  —
                  <a href="" rel="noopener noreferrer" class="text-gray-600 ml-1" target="_blank"> @3-Tigada</a>
                </p>
                <span class="inline-flex sm:ml-auto sm:mt-0 mt-4 justify-center sm:justify-start">
                  <a class="text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                    </svg>
                  </a>
                  <a class="ml-3 text-gray-500">
                    <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="0" class="w-5 h-5" viewBox="0 0 24 24">
                      <path stroke="none" d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"></path>
                      <circle cx="4" cy="4" r="2" stroke="none"></circle>
                    </svg>
                  </a>
                </span>
              </div>
            </div>
          </footer>
      </body>
  </html>  