<html>
<head>
@yield('head')
<link rel="shortcut icon" href="{{asset('img/favicon.ico')}}">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--[if IE]>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<![endif]-->
<meta http-equiv="x-ua-compatible" content="ie=edge" />
<meta name="Copyright" content="Delta Trek" />
<meta name="author" content="Inspire Academy" />
<meta name="Language" content="English" />
<meta name="Distribution" content="Global" />
<meta name="Robots" content="INDEX,FOLLOW" />
<meta name="Revisit-after" content="4 Day" />
<meta name="expires" content="never" />
<meta name="google-site-verification" content="t-L_SKgjdixZa9n9eW8guCSUeC727lgV_MZS2kiVN_8" />
<!-- css files -->
<link href="{{asset('website/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('website/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('website/css/team.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('website/css/style2.css')}}" rel="stylesheet" type="text/css" media="all"/>
<link href="{{asset('website/css/sidebar.css')}}" rel="stylesheet" type="text/css" media="all"/>


<!-- js files -->
<style type="text/css">
  /* width */
::-webkit-scrollbar {
  width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey; 
  border-radius: 10px;
}
 
/* Handle */
::-webkit-scrollbar-thumb {
  background: #31B0D5; 
  border-radius: 10px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background:#31B0D5; 
}
</style>
    

<script src="https://code.jquery.com/jquery-2.2.4.js"></script>
<script src="{{asset('js/modernizr.js')}}"></script>
<!-- /js files -->
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
<!-- navigation -->
<header>
	
  <div id="menu-header-container" class="page-header">
    <div id="menu-header-container-wrapper" class="page-header-wrapper">
      <div class="hamburger-wrapper">
        <a id="menu-hamburger-menu" class="hamburger-menu" href="#" title="Menu">
          <span class="line line-1"></span>
          <span class="line line-2"></span>
          <span class="line line-3"></span>
        </a>
      </div>
    </div>
  </div>

  <div id="menu" class="sidebar">
    <div id="menu-wrapper" class="sidebar-wrapper">
      <ul id="home">
        <li><a data-id="{{ route('home') }}" class="sidelink"><i class="fa fa-home"></i> Home</a></li>
       
         <li><a class="sidelink" data-id="{{ route('about_us') }}" ><i class="fa fa-edit"></i> About Us</a></li>
         <li><a class="sidelink" data-id="{{ route('gallery') }}"><i class="fa fa-image"></i> Gallery</a></li>
        <li><a class="sidelink" data-id="{{ route('team') }}" ><i class="fa fa-file"></i> Our Faculty</a></li>
        <li><a class="sidelink" data-id="{{ route('branches') }}" ><i class="fa fa-map-marker"></i> Our Branches</a></li>
        <li><a class="sidelink" data-id="{{ route('student-form') }}"><i class="fa fa-sign-in"></i> Login</a></li>
        <li class="section"><i class="fa fa-book"></i> Courses</li>
        <li><a class="sidelink" data-id="{{ route('regular_courses') }}"><i class="fa fa-book"></i> Regular Batch</a></li>
        <li><a class="sidelink" data-id="{{ route('foundation_courses') }}"><i class="fa fa-book"></i> Foundation Batch</a></li>
          

      </ul>
    </div>
  </div>

			<div class="container-fluid " >
				<div class="header d-lg-flex justify-content-between align-items-center py-3 px-sm-3">
					<!-- logo -->
					<div id="logo" style="padding: 10px;">
						<a style="margin-left: 0px;" href="{{ route('home') }}"><img style="margin-bottom: 8px;" src="{{asset('adminsa/images/logo.png') }}" width="70%"></a>
					</div>
					<!-- //logo -->
					<!-- nav -->
					<div class="nav">
						<nav>
							<input type="checkbox" id="drop" />
							<ul class="menu" style="color: #777; `margin-top: 5px;">
								<li><a class="active" href="{{ route('home') }}" > Home </a></li>
								<li><a href="{{ route('about_us') }}">About Us</a></li>
								<li>
									<!-- First Tier Drop Down -->
									<label for="drop-2" class="toggle toogle-2">Courses <span class="fa fa-angle-down" aria-hidden="true"></span>
									</label>
									<a href="#">Courses <span class="fa fa-angle-down" aria-hidden="true"></span></a>
									<input type="checkbox" id="drop-2" />
									<ul>
									<li><a href="{{ route('regular_courses') }}" class="drop-text">Regular Batch</a></li>
									<li><a href="{{ route('foundation_courses') }}" class="drop-text">Foundation Batch</a></li>
									</ul>
								</li>
										<li><a href="{{ route('gallery') }}" class="drop-text">Gallery</a></li>
										<li><a href="{{ route('team') }}" class="drop-text">Our Faculty</a></li>
                    <li><a href="{{ route('branches') }}" class="drop-text">Branches</a></li>
								<li><a href="{{ route('student-form') }}">Log In</a></li>
							</ul>
						</nav>
					</div>
					<!-- //nav -->
				</div>
			</div>
		</header>
<!-- /navigation -->
@yield('body')
<!-- /Contact -->
<!-- Footer Section -->
<section class="footer">
	<div class="container">
				<div class="copyright">
					<p style="text-align: center;">© 2020 Inspire Academy.| Designed by Delta Trek</a></p>
				</div>
			</div>
</section>

<div class="wsk-float">
  <a onclick="login()" class="btn pulse-button">Login
  </a>
</div>
<!-- /Footer Section -->
<!-- js files -->
<script src="{{asset('js/jquery.min.js')}}"> </script>
<script src="{{asset('js/bootstrap.min.js')}}"> </script>
<script src="{{asset('js/SmoothScroll.min.js')}}"> </script>
<!-- js for banner -->
<script src="{{asset('js/index.js')}}"></script>
<!-- /js for banner -->
<!-- js for gallery -->
<script src="{{asset('js/darkbox.js')}}"></script>
<!-- /js for gallery -->
<!-- js for smooth navigation -->
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

  // Store hash
  var hash = this.hash;

  // Using jQuery's animate() method to add smooth page scroll
  // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
  $('html, body').animate({
    scrollTop: $(hash).offset().top
  }, 900, function(){

    // Add hash (#) to URL when done scrolling (default click behavior)
    window.location.hash = hash;
    });
  });
})
</script>
<!-- /js for smooth navigation -->
<!-- js for sliding animations -->
<script>
$(window).scroll(function() {
  $(".slideanim").each(function(){
    var pos = $(this).offset().top;

    var winTop = $(window).scrollTop();
    if (pos < winTop + 600) {
      $(this).addClass("slide");
    }
  });
});
</script>
<script type="text/javascript">
	$('.sidelink').click(function () {
		var id = $(this).data('id');
		location.href = id;
	});
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
  setTimeout(carousel, 7000);    
}
function login() {
	location.href="{{ route('student-form') }}";
}
</script>

<script type="text/javascript">
	document.addEventListener("DOMContentLoaded", function() {
  var self = this;
  this.elements = {
    header: {
      container: function() {
        return document.getElementById("menu-header-container");
      },
      hamburgerMenu: function() {
        return document.getElementById("menu-hamburger-menu");
      }
    },
    sidebar: {
      overlay: function() {
        return document.getElementById("menu");
      },
      wrapper: function() {
        return document.getElementById("menu-wrapper");
      }
    }
  };
  this.binds = function() {
    var sideLinks = document.querySelectorAll(".sidebar-wrapper li a");
  
    // Changes header colour after scrolled by 100px
    window.addEventListener("scroll", function(e) {
      var scrollTop =
        window.pageYOffset !== undefined
          ? window.pageYOffset
          : (document.documentElement ||
              document.body.parentNode ||
              document.body
            ).scrollTop;
      if (scrollTop > 100) {
        if (self.elements.header.container()) {
          self.elements.header.container().classList.add("scrolled");
        }
      } else {
        if (self.elements.header.container()) {
          self.elements.header.container().classList.remove("scrolled");
        }
      }
    });

    // Hamburger menu
    if (this.elements.header.hamburgerMenu()) {
      self.elements.header
        .hamburgerMenu()
        .addEventListener("click", function(e) {
          e.preventDefault();

          this.classList.toggle("active");
          document.querySelector("body").classList.toggle("disable-scroll");
          self.elements.sidebar.overlay().classList.toggle("active");
          self.elements.sidebar.wrapper().classList.toggle("active");
          self.elements.header.container().classList.toggle("sidebar-open");
        });
    }

    // Hide sidebar when click target is not a link
    if (this.elements.sidebar.overlay()) {
      self.elements.sidebar.overlay().addEventListener("click", function(e) {
        e.preventDefault();

        document.querySelector("body").classList.remove("disable-scroll");
        if (e.target.tagName.toLowerCase() !== "a") {
          self.elements.header.hamburgerMenu().classList.remove("active");
          self.elements.sidebar.overlay().classList.remove("active");
          self.elements.sidebar.wrapper().classList.remove("active");
          self.elements.header.container().classList.remove("sidebar-open");
        }
      });
    }
  };

  this.binds();
});

</script>
</body>
</html>
