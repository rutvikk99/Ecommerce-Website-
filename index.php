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


    <body>
      
        <!-- header for the website -->
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

        <!-- ecom skeleton  for the website -->
        <section class="text-gray-700 body-font">
          <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
      
            <div class="lg:flex-grow md:w-1/2 lg:pr-24 md:pr-16 flex flex-col md:items-start md:text-left mb-16 md:mb-0 items-center text-center">
              <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-gray-900">Why should I use
                <br class="hidden lg:inline-block">  Food Express?
              </h1>
              <p class="mb-8 leading-relaxed">FoodExpress allows you to walk away from the drudgery of grocery/food shopping and welcome an easy relaxed way of browsing and shopping</p>
              <div class="flex justify-center">
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg"> <a href="menu.php">Let's Go Shopping --> </a></button>
                
              </div>
            </div>
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6">
              <img class="object-cover object-center rounded" alt="hero" src="v.jpg">
            </div>
          </div>
        </section>




      

        <!-- footer -->

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