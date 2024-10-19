<div>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Lacrostini">
  <meta name="author" content="Lacrostini">
      <!-- CSRF Token -->
	  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Lacrostini</title>
 <!-- Bootstrap css -->
 <link rel="stylesheet" href="{{asset('assets/customer')}}/css/bootstrap.css?v=2.0"> 
 <!-- <link href="css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" /> -->
 <link href="{{asset('assets/customer')}}/css/bootstrap.css?v=2.0" rel="stylesheet" type="text/css" />

<!-- Custom css -->
<link href="{{asset('assets/customer')}}/css/ui.css?v=2.0" rel="stylesheet" type="text/css" />
<!-- <link href="css/ui.css?v=2.0" rel="stylesheet" type="text/css" /> -->

<link href="{{asset('assets/customer')}}/css/responsive.css?v=2.0" rel="stylesheet" type="text/css" />

<!-- Font awesome 5 -->
<link href="{{asset('assets/customer')}}/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
<!-- <link href="fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet"> -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">

<!-- Bootstrap CSS - added --> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


<link href="https://fonts.googleapis.com/css2?family=Alata&family=Bebas+Neue&family=Concert+One&family=Rubik+Mono+One&display=swap" rel="stylesheet">

</head>
<body>

<header class="section-header fixed-top container-fluid  ">	
	<section class="header-main container  ">
	<nav class="navbar py-0 navbar-expand-lg navbar-dark text-light ">
      <div class="container">

        <!-- logo -->
        <a class="navbar-brand text-uppercase fs-3" href="{{ route('home') }}">
            Lacrostini
          <!-- <img class="" src="{{ asset('storage/store/2024-03-02-65e388453b907.png')}}" alt="Logo"> -->
        </a>

        <button
          class="navbar-toggler order-1"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse mx-auto order-last"
          id="navbarSupportedContent"
        >
          <ul
            class="navbar-nav text-uppercase text-md-start text-lg-center mx-auto mb-2 mb-lg-0"
          >
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('account')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >Inicio</a
              >
            </li>
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('wishlist')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >LA CROSTINI</a
              >
            </li>
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('wishlist')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >carta</a
              >
            </li>
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('wishlist')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >Pedido en linea</a
              >
            </li>
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('wishlist')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >Contacto</a
              >
            </li>
            <li class="nav-item text-left mx-lg-2">
              <a
                href="{{route('login')}}"
                class="nav-link active"
                aria-current="page"
                href="#"
                >Login</a
              >
            </li>
          </ul>
        </div>
        <div class="cart col-lg-2 text-end order-lg-last order-0 order-0">
          <a
            data-bs-toggle="offcanvas"
            href="{{route('cart.info')}} "
            class="text-right"
          >
            <i class="fa fa-shopping-cart text-light fs-4"></i>
          </a>
        </div>
      </div>
    </nav>
	</section> <!-- header-main end.// -->


</header> <!-- section-header end.// -->


<!-- Bootstrap js -->
<script src="js/bootstrap.bundle.min.js"></script>

<!-- Custom js -->
<script src="js/script.js?v=2.0"></script>

</body>

<script>
	const productListRoute = "{{ route('product.list', ':search') }}";

document.getElementById('searchButton').addEventListener('click', function() {
    // Get the search query and category ID
    var searchQuery = document.getElementById('searchInput').value.trim();

    // Construct the search URL with the search query parameter
    if (searchQuery !== '') { // Check if searchQuery is not empty
        var searchUrl = productListRoute.replace(':search', encodeURIComponent(searchQuery));

        // handling fixed navbar
        navbar_height = document.querySelector('.navbar').offsetHeight;
        document.body.style.paddingTop = navbar_height + 'px';

        // Redirect to the search URL
        window.location.href = searchUrl;
    });
	
</script>
<script>
  // Initialize Bootstrap components ( navbar toggle)
  var myNavbar = document.getElementById('navbarSupportedContent');
  var bsNavbar = new bootstrap.Collapse(myNavbar);
</script>
<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<style>
.section-header{
  background-color:black !important;
  
  /* margin-bottom: */
}
	.bebas-neue-regular {
  font-family: "Bebas Neue", sans-serif;
  /* font-weight: 00; */
  font-style: normal;
  font-size: larger;
}
.cart{
	width:fit-content;
}
.cart:hover i{
	color:#E74E0F !important;

}

.navbar-dark .navbar-nav .nav-item:hover a{
			color:#E74E0F !important;
		}


</style> 
</div>

