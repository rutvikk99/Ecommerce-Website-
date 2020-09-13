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
            <li class="active">Help</li>
        </ol>
    </div>
            </div>
<!-- //breadcrumbs -->

<section class="text-gray-700 body-font relative">
    <div class="absolute inset-0 bg-gray-300">
      <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.4293168040026!2d72.9144445152646!3d19.350554786931067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7a56dd564fc65%3A0xdedc6f62731ee7eb!2sUniversal%20College%20of%20Engineering%20Mumbai!5e0!3m2!1sen!2sin!4v1599909740146!5m2!1sen!2sin;width=100%&amp;height=600&amp;hl=en&amp;q=%C4%B0zmir+(My%20Business%20Name)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed"></iframe>
    </div>
    <div class="container px-5 py-24 mx-auto flex">
      <div class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10">
        <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
        <p class="leading-relaxed mb-5 text-gray-600">Post-ironic portland shabby chic echo park, banjo fashion axe</p>
        <input class="bg-white rounded border border-gray-400 focus:outline-none focus:border-orange-500 text-base px-4 py-2 mb-4" placeholder="Email" type="email">
        <textarea class="bg-white rounded border border-gray-400 focus:outline-none h-32 focus:border-orange-500 text-base px-4 py-2 mb-4 resize-none" placeholder="Message"></textarea>
        <button class="text-white bg-orange-500 border-0 py-2 px-6 focus:outline-none hover:bg-orange-600 rounded text-lg">Button</button>
        <p class="text-xs text-gray-500 mt-3">Chicharrones blog helvetica normcore iceland tousled brook viral artisan.</p>
      </div>
    </div>
  </section>



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
          <footer class="text-gray-700 body-font">

              </div>
            </div>
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