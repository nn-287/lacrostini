<head>
	<link href="{{asset('assets/customer')}}/fonts/fontawesome/css/all.min.css" type="text/css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" type="text/css" rel="stylesheet">
	

</head>
<div>
	<!-- Font awesome 5 -->

	<div class="landingPage ">
		@include('livewire.layouts.header')
		<!-- ================ SECTION INTRO ================ -->

		<section class="section-intro padding-top-sm sliding container-sm">
			<div class="container px-0 ">
				<main class="card px-0 ">
					@php($banner_img = $selected_banner->image)
					<div class="row">
						<div class="col">
							<article class="card-banner   px-0  " style="background-image: url('{{ asset('storage/banner/' . $banner_img) }}');  
								  background-size: cover; background-position: center center; padding-y: 50px; height: 360px">
								<div style="max-width: 500px">
									<h2 class="text-white concert-one-regular text-uppercase">{{$selected_banner->title}} </h2>
									<p class="text-white alata-regular">{{$selected_banner->description}}</p>
									<a href="#" class="btn btn-warning text-uppercase">PEDIDO EN LINEA </a>
									<aside class="col-lg pl-0 pt-5">
										<nav class="nav  nav-pills">
											@foreach($banners as $banner)
				
											@if($selected_banner_id == $banner->id)
											@php($banner_img = $banner->image)
											<div class="nav-link dots mx-2  active alata-regular" style="cursor: pointer" aria-current="page" wire:click="updateSelectedBanner('{{ $banner->id }}')"></div>
											@else
											<div class="nav-link dots mx-2  alata-regular" style="cursor: pointer;" wire:click="updateSelectedBanner('{{ $banner->id }}')"></div>
											@endif
											@endforeach
										</nav>
									</aside>
								</div>
							</article>
						</div>
					</div>
				</main>
			</div> <!-- container end.// -->
		</section>
		<!-- ================ SECTION INTRO END.// ================ -->
		
		<!-- ================ SECTION contact ================ -->
		<section class="contact w-100">
			<div class="container">
				<div class="row d-flex justify-between flex-row">
					<div class="left d-flex align-items-center col-md-10 col-sm-8  ">
						<i class="fa-solid text-light fs-2 pr-2  fa-map-location-dot mainColor"></i>
						<p class="text-light fs-lg-6">Carrer de mossen jasint <br> verdaguer, 132 08330 premia del mar</p>
					</div>
					<div class="right  align-items-center d-none d-lg-flex col-md-2 col-sm-4">
						<p class="text-light fs-lg-6 ">Mira como <br> lo hacemos</p>
						<i class="fa-solid text-light pl-2 fs-2 fa-location-arrow"></i>
					</div>
				</div>
			</div>
		</section>
		<!-- ================ SECTION contact END.// ================ -->

	</div>

	<!-- ================ SECTION PRODUCTS ================ -->
	<section class="padding-top products ">
		<div class="container my-4 pb-4">

			<!-- removed section heading  -->

			<div class="container">
				<div class="row">
					<!-- category filter -->
					<div class="col-4 col-xs-12 float-left">
						<div class="input-group">
							<ul class="form-select text-light" style="background: transparent; border: none;">
								<p class="fw-bold text-light text-start ">Filtro</p>
								<li value="">
									<a href="" class="text-decoration-none selected text-light">Pizzas</a>
								</li>
								<li value="">
									<a href="" class="text-decoration-none text-light">Hamburguesas</a>
								</li>
								<li value="">
									<a href="" class="text-decoration-none text-light">Entradas</a>
								</li>
								<li value="">
									<a href="" class="text-decoration-none text-light">Postres</a>
								</li>
							</ul>
						</div> <!-- filter-group end.// -->
					</div> <!-- col end.// -->

					<!-- heading -->
					<div class="col  mx-auto">
						<h3 class="section-title fw-bold text-light fs-1 pb-2 pl-1 text-left">PLATOS <br> FAVORITOS</h3>
					</div> <!-- col end.// -->
				</div> <!-- row end.// -->
			</div> <!-- container end.// -->

		<div class="row">
				@foreach($featured_products as $featured_product)
				@php($discount = $featured_product->discount)
				@php($discount_amount = $featured_product->discount_type=='amount'? $featured_product->discount : ($featured_product->price * $featured_product->discount) /100)
				@php($whishlist_product = \App\Model\Wishlist::where('user_id', auth()->user()->id)->where('product_id', $featured_product->id)->first())
			<div class="col-lg-3 cardParent col-md-4  col-sm-6 col-xs-12">
				
				<figure class="card card-product-grid"> 
						<a href="{{route('product.details', [$featured_product->id])}}" class="img-wrap">
						
							<img src="https://s3-alpha-sig.figma.com/img/a0c5/5d0d/ce0094a606b490197cb8771434321fa3?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Ok72pyJa0zB0G6PvobmKkcsCzr6SgLYCDGWxjEsZssw9dSyS1THb9RztWkrgX10KEYWCTGlv7QV-7jzGZwQdudMvyVoLCcfHCbWdQJX0dH0dMB~rAz7vQKXY49fZVd4~yTymAOL8LhfFAhg~mIgJ5Kb4vF1VSadd~58b7mMWWN58sWAcRLatSZD5HFzuYGis0OLLsSiVJ9VeBTnsYXGC1Hq8UtDiIj0vZy4Lb5X~zkyeHpUV4WpykRrLTc-n8jjDNQpRYx1Ym8EEGJRhtzgfk4r0FS4UUPIm1e3gWFoS~j2oHk2VcxBsuLiiW8tOMrNCgcHIzhS6~5IzVgCmuu877Q__">
							<!-- <img src="{{ asset('storage/product/' . $featured_product->image) }}"> -->
						</a>

<<<<<<< HEAD
						<figcaption class="info-wrap border-top">
							<a wire:click="addToWhishlist('{{ $featured_product->id }}')" class="float-end btn btn-light btn-icon">
								@if($whishlist_product)
								<i class="fa fa-heart" style="color: red;"></i>
								@else
								<i class="fa fa-heart"></i>
								@endif
							</a>
             <a href="{{route('product.details', [$featured_product->id])}}" class="title text-truncate concert-one-regular" 
							style="font-size:large">{{$featured_product->name}}</a>
=======
						<figcaption class="info-wrap  ">
							<div class="infoIcon d-flex justify-content-end">	
								
								<a href="">
									<i class="fa-solid fa-circle-info"></i>	
										<p class="w-75 InfoTip p-3 text-light">
											Tomate / mozarella / cebolla/ pimientos / calabacin / champiñones
										</p> 
								</a>
								
							</div>
							<div class="price-wrap text-light d-flex justify-content-between">

								<span class="price text-light  alata-regular">9 €</span>
								<span class="text-white-50">350gr</span>
								
							</div> <!-- price-wrap.// -->

							
							<a href="{{route('product.details', [$featured_product->id])}}" class="title fs-5 text-truncate text-light concert-one-regular" 
							>{{$featured_product->name}}</a>

							<p class="text-light fw-bold" style="font-size:13px">
								<span>Grande</span> /
								<span>Mediana</span> /
								<span style="color:#E74E0F">Personal</span>
							</p>
>>>>>>> 0b497c7994502bc8952d02684bbd960a7cc302fa

							@php($variations = json_decode($featured_product->variations, true))

							@php($start_at_txt = '')
							@if(count($variations) > 0)
							@php($start_at_txt = 'Starts at:')
							@endif

							@foreach(json_decode($featured_product->variations, true) as $variation)
							<!-- <small class="text-muted pr-2">{{$variation['type']}}</small> -->
							@endforeach

							
						</figcaption>
						<div class="card-pedir d-flex justify-content-end">
							<a wire:click="addToWhishlist('{{ $featured_product->id }}')" style="width:fit-content;" class="mb-lg-4 mr-3 mb-3 mb-sm-3 text-light btn fw-bold btn-warning">
								Pedir
							</a>
						</div>

				</figure>
			</div> <!-- col end.// -->
				@endforeach
		</div> <!-- row end.// -->
			
			<!-- Pizza banner separator -->
			<div class="more d-flex mt-1 justify-content-center align-content-center">
				<a href="#" class="btn btn-warning text-center fw-bold">Ver Todos </a>
			</div>

		</div> <!-- container end.// -->

		<!-- Pizza banner -->
		<div class="pizza-banner">
			<img src="https://s3-alpha-sig.figma.com/img/4082/29bc/9d04a01e91dd01b0ac4a1b3235c2b208?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=POM5u5oQhCF3qPeq2UEJe1n-TsnqTuNbh9icb75mN3r7SenjoeAuMlZ31YOqj-K-5Fl3r0npjzPpgsP3qbqgxzeqlRJAncqscflBpL4aG7uBMkypsN-Z7fXZ-mCSznFz3QCjc~x5KbDp7Kp~wEFkYoGiBy9ZtyMNydjzRSmNUDmOUAhQDF6kuCobHsRwxYS9ueUjLPkUcA4VqcikWlpDt209CBmDmFBnBpVZLZ8VEFH3aIViuLQmmVmuuoxMmk2aufB6bKxeZfRret~LyHRoTSO~V3kcSOWJ5crguXVBZQo9uZfn69~Wc90dwxU92EAuwtLR7-NvAGlO51y-cQEuNg__" 
				 class="w-100" height="250px"	 alt="" srcset="">
		</div>
	</section>
	<!-- ================ SECTION PRODUCTS END.// ================ -->

	<!-- ================ SECTION COOKING BANNER ================ -->
	<section class="cooking"> 
		<div class="container">
<<<<<<< HEAD
			<div class="row gy-4">
				<aside class="col-lg-6">
					<article class="card-banner p-5 bg-gray img-bg h-100" style="background-image: url('{{ asset('storage/banner/' . $featured_banner_one->image) }}'); 
                            background-size: cover; background-position: center center; padding-y: 50px; height: 360px; position: relative;">
						<div style="position: relative; z-index: 1; max-width: 500px;">
							<h2 class="text-white concert-one-bold">{{$featured_banner_one->title}}</h2>
							<p class="text-white alata-regular">{{$featured_banner_one->description}}</p>


<a href="{{ route('product.list', ['search' => ' ', 'categoryId' => $featured_banner_one->category_id]) }}" class="btn btn-warning">View more</a>
						</div>
						<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); z-index: 0;"></div>
					</article>


				</aside> <!-- col.// -->
				<aside class="col-lg-6">

					<div class="row mb-4">
						<div class="col-6">
							@php($featured_banner_two = \App\Model\Banner::where('banner_position', '2')->first())
							<article class="card bg-primary" style="background-image: url('{{ asset('storage/banner/' . $featured_banner_two->image) }}'); 
                                   background-size: cover; background-position: center center; padding-y: 50px; position: relative; min-height: 200px">
								<div class="card-body" style="position: relative; z-index: 1;">
									<h5 class="text-white concert-one-bold">{{$featured_banner_two->title}}</h5>
									<p class="text-white alata-regular">{{$featured_banner_two->description}} </p>
<a class="btn btn-outline-light btn-sm"
									 href="{{ route('product.list', ['search' => ' ', 'categoryId' => $featured_banner_two->category_id]) }}">Learn more</a>
								</div>
								<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 0;"></div>
							</article>
						</div>
						<div class="col-6">
							@php($featured_banner_three = \App\Model\Banner::where('banner_position', '3')->first())
							<article class="card bg-primary" style="background-image: url('{{ asset('storage/banner/' . $featured_banner_three->image) }}'); 
                 background-size: cover; background-position: center center; padding-y: 50px; position: relative; min-height: 200px">
								<div class="card-body" style="position: relative; z-index: 1;">
									<h5 class="text-white concert-one-bold">{{$featured_banner_three->title}}</h5>
									<p class="text-white alata-regular">{{$featured_banner_three->description}} </p>
<a class="btn btn-outline-light btn-sm" href="{{ route('product.list', ['search' => ' ', 'categoryId' => $featured_banner_three->category_id]) }}">Learn more</a>
								</div>
								<div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.7); z-index: 0;"></div>
							</article>
						</div>
					</div> <!-- row.// -->

					@php($featured_banner_four = \App\Model\Banner::where('banner_position', '4')->first())
				 	<article class="card bg-success" style="background-image: url('{{ asset('storage/banner/' . $featured_banner_four->image) }}'); 
                           background-size: cover; background-position: center center; padding-y: 50px; position: relative; min-height: 200px">
						<div class="card-body">
							<h5 class="text-white concert-one-bold">{{$featured_banner_four->title}}</h5>
							<p class="text-white-50 alata-regular" style="max-width:400px;">{{$featured_banner_four->description}}</p>
<a class="btn btn-outline-light btn-sm" href="{{ route('product.list', ['search' => ' ', 'categoryId' => $featured_banner_four->category_id]) }}">Learn more</a>
						</div>
					</article>

				</aside> <!-- col.// -->
			</div> <!-- row.// -->
		</div> <!-- container end.// -->
	</section>
	<!-- ================ SECTION FEATURE END.// ================ -->

	<!-- ================ SECTION PRODUCTS ================ -->
	<section class="padding-top">
		<div class="container">
			<header class="section-heading">
				<h3 class="section-title">Most New</h3>
			</header>

			@php($products = \App\Model\Product::active()->latest()->take(5)->get())

			<div class="row gy-3">
				@foreach($products as $product)
				
				<div class="col-lg-2 col-md-4 col-4">
					<div class="position-relative">
						<a href="{{route('product.details', [$product->id])}}" class="img-wrap">
							<img height="200" width="200" class="img-product" src="{{ asset('storage/product/' . $product->image) }}">
						</a>
<a href="{{route('product.details', [$product->id])}}" class="bottom-sticker">
						<span class="title concert-one-bold">{{ $product->name }}</span>
							<span class="price alata-regular">€{{ $product->price }}</span>
						</a>
					</div>
=======
			<!-- row 1 -->
			<div class="row align-items-center pt-5">
				<img class="col-7 col-sm-6 " src="https://s3-alpha-sig.figma.com/img/8628/b5c2/a6cb263740edcbfffe1b6f748885d5fc?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=PzbMcjgYkoHbgVrG-03ZaS9cEglbeD66UuJu-aMYVuihWz7mgSlUdaGQWIQxTUFZuFu8D29fu9~tgc9712OFCRJWtJ6HGFTna9MQBYSX0gzplYtpB3jOLYdLrUNmyuxSK-MvSnYdbOTPuD581WSVOxRDduHZ2ZHh2riokFBdMGgte78WquloCuAxoBQGvssX9-SemJH3O2GFQShr3PVqMjMoM-rH0XA~hnYJQGX26n~OXC31WbumOHJoojo7i~Q04HDoGZttN5pDWu3oXtMci0Fb33EraVYpzxiZJOOgtV8aoZdN1AujSb3uY-5TJJoOPAD4VwXpzlqqn2lgivFJUw__" alt="" srcset="">
				<p class="fs-1 como col-4 col-sm-4  text-white ml-sm-4 px-0 fw-bold" >¿Como lo <br> hacemos?</p>
			</div>
			<!-- row 2 -->
			<div class="row row2 align-items-center pt-sm-0 pt-5">
				<div class="col-md-6 col-sm-12 order-last order-sm-start padding-top-sm-0 padding-top-3 d-flex justify-content-center justify-content-sm-start mb-3 mb-md-0">
					<a class="btn Conocenos btn-warning fw-bold" href="#">Conocenos</a>
>>>>>>> 0b497c7994502bc8952d02684bbd960a7cc302fa
				</div>
				<div class="col-md-6 order-sm-last col-sm-12">
					<p class=" col-sm-10 mx-auto mx-sm-0 px-sm-0 text-left text-white">
						Bienvenido a <strong>La Crostini</strong>, donde la tradición
						se une con la pasión por la comida artesanal.
						Deléitate con nuestras irresistibles pizzas,
						pastas al dente y hamburguesas gourmet,
						elaboradas con ingredientes cuidadosamente
						seleccionados.
					</p>
				</div>
		</div>

			<!-- row 3 -->
			<div class="joint w-100 d-flex justify-content-center">
				<a   class="btn btn-warning col-10 col-sm-5  fs-sm-5 fs-6 fw-bold text-center text-white mx-auto" href="">TRABAJA CON NOSOTROS</a>
			</div>
		</div>
		<!-- map banner -->
		<div class="map-banner">
			<img src="https://s3-alpha-sig.figma.com/img/4bdc/bd6d/d76d2e1b2ce89fe26c358641d9f8a8ba?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=PHuDrk482tWlDBIBR1RYwS1l0rZXblCWBryJyqlxFGgeuKnvoLR1-ud0hB9eDwNYU7C8t1YvVjiz0xXRSTgZmSFKQ7Cz9RYICrg68Oi~jndPaBFbSLPQJhKtFipz2cQPs5CPGCimjD8Hzg3gQ5EgvEKsxbew33cWjoTgGyT5wcIWeUvqyb57hycE5hhQ2MJHq4AzgcfsGMyII3Rwm5Y9y4i59ro5KE~VxeLMp2xmvZxFeDfrY4P35l0F~ItXIEU9YpuL7p1sAKNkTjNpUYK1mH~KbmW7JdFcUCGLzpY0CrDlNMSpV9XTLn5CBVhWm7sVN72e8s9pI2oMOnDJ6zA4bw__" 
				 class="w-100"	 alt="" srcset="">
		</div>
	</section>
	<!-- ================ SECTION COOKING BANNER END.// ================ -->
	
    
	<!-- ================ IMPORTING FOOTER COMPONENT ================ -->
	@include('livewire.layouts.footer')
	
	
	
	<!-- ================ CUSTOM STYLES ================ -->
	<style>
		
		/* styling main landing page */
		.landingPage{
			background: #51585e url("https://s3-alpha-sig.figma.com/img/e28a/4885/a4765cc648b3715dab05d77e58edadd3?Expires=1710115200&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=Q6vIeRPrPV5yP5suShmFos3h3-7I7n38aXlfHCg9OH9YO7VYg4ZOAg-bF9hrceW5vWG5DrlvrlXppl3GZYaOfED5j3z5C2uul1lqZBsEjaSResX92ySdi5etCg9dQchTIWRQhMf7TVKcyG-p2ugJS2piZfoE3MHxEOa7vsYF6ydjTRM95dr-D69IHZIL05CWUzM5Dr8fJCnRrcjFSI-Sb9XaodF70jDdKHhTHX~3X17dzjjdO-NlRaAwKWRYXt2ay2SPvjr4ll0SFTOfFzEJjrNrnMOwtep7O5xK~5kOKy9AIAxzzAnmIvQ11IY-mCYiFGeLt1k7GkSvoc8vTKCYfA__") no-repeat  center/cover;
			background-blend-mode: multiply;
			min-height:100vh;
		}
		section.contact{
			position:absolute;
			top:106vh;
		}
		.mainColor{
			color:#E74E0F !important ;
		}
		.landingPage>div{
			background: linear-gradient(to bottom, #000000 90%, transparent);
		}
		
		
		section.sliding{
			margin-top:70px  !important;
		}
		.landingPage .section-intro .card-banner,.landingPage .section-intro .card{
			background:none !important;
			border:none;
		}
		.landingPage .section-intro .card{
			margin-top: 130px;
			
		}
		.bottom-sticker {
			position: absolute;
			bottom: 0;
			left: 0;
			width: 100%;
			background-color: rgba(0, 0, 0, 0.7);
			color: #fff;
			padding: 5px;
			text-align: center;
		}
		
		.title,
		.price {
			display: block;
			font-size: 14px;
		}
		
		.price {
			font-weight: bold;
		}
		.dots{
			width:10px !important;
			height:10px !important;
			border-radius:50% !important;
			padding:0 !important;
			background:white !important;
		}
		.nav-pills .nav-link.active, .nav-pills .show>.nav-link{
			background:#E74E0F !important;
		}
		a.btn-warning{
			color:white !important;
			background-color: #e74e0f !important ;
			border-color: #e74e0f !important;
			
		}
		
		a.btn-warning:focus{
			box-shadow:none;
		}
		
		/* styling products section*/
		section.products{
			background:  url("https://s3-alpha-sig.figma.com/img/3724/c57c/6133a80bd954d2c808bf20577662db14?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lXEin1Ef~08opv9FLO1w9Kttg470poX2~2Hbf~Z88Osw98Xxwn0AxEdlotFVDnxoEPTd5fZwWjSxmbQtXfCyi7sVKL0-VrlKexbPJP7Qi7fjHPaiakBKQFBDkljmYEpXfOhtC3mUTKhBo~wUlMpqJhLZUxyve-cmCtkxo1jMr6rm-ruekJ9uZHFFDdC1~L94fsEuJGIHxGa1i9c~SI-jXM0ywgLe9HpE7Nd9HUG2Dy5aoeEuYeJAwQK3QHlEHjc-jw8lVKf46NSLaeY-0P5bCj2D7-U7qT~CGEV8nuVZgA41m0IrUXsL1JkaTNgSCUcbi4s9E2pDO-zyed0H9msI1A__") no-repeat  center/cover;
			min-height:100%;
		}
		.products .section-title{
			position:relative;
			font-family:Gotham Black, sans-serif;
			width:fit-content;
		}
		.infoIcon a i {
			color:#E74E0F;
			position: relative;
		}
		.infoIcon a:hover .InfoTip {
			display:block !important;
		}
		.InfoTip{
			display:none !important;
			position: absolute;
			background: #ffffffd9;
			color: black !important;
			font-size: 10px;
			bottom: 43%;
			right: 5%;
			border-radius: 5px;
			display: block;
			z-index: 99999 !important;
		}
		.InfoTip::before{
			content: "";
			position: absolute;
			width: 15px;
			height: 10px;
			background: #ffffffd9;
			clip-path: polygon(50% 100%, 0 0, 100% 0);
			top: 100%;
			right: 8px;
		}
		.products .section-title::before{
			content : "";
			position : absolute;
			width : 100%;
			height : 6px;
			background-color:  #E74E0F;
			bottom: 0; 
			left: 0;
		}
		.products .card{
			background:#292929;
			border-radius:20px !important;
		}
		.products .cardParent:nth-child(2) .card{
			background:#E74E0F;
		}
		.products .cardParent:nth-child(2) figcaption .infoIcon a i{
			color:white !important;
		}
		.products .cardParent:nth-child(2) .card a.btn-warning{
			background:#292929 !important;
			border-color:#292929 !important;
		}
		.products .cardParent:nth-child(2) .card p span:last-child{
			color:#292929 !important;
		}
		li::marker {
			color:#E74E0F;
		}

		.input-group {
			display: flex;
			justify-content: flex-start;
		}

		.section-title {
			margin-top: 30px; 
		}
		a.selected{
			position: relative;
			color:#E74E0F !important;
		}
		.selected::before{
			content : "";
			position : absolute;
			width : 100%;
			height : 2px;
			background-color:  #E74E0F;
			bottom: 0; 
			left: 0;
		}

				/* styling Cooking section*/
		section.cooking{
			background: url("https://s3-alpha-sig.figma.com/img/3724/c57c/6133a80bd954d2c808bf20577662db14?Expires=1710720000&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4&Signature=lXEin1Ef~08opv9FLO1w9Kttg470poX2~2Hbf~Z88Osw98Xxwn0AxEdlotFVDnxoEPTd5fZwWjSxmbQtXfCyi7sVKL0-VrlKexbPJP7Qi7fjHPaiakBKQFBDkljmYEpXfOhtC3mUTKhBo~wUlMpqJhLZUxyve-cmCtkxo1jMr6rm-ruekJ9uZHFFDdC1~L94fsEuJGIHxGa1i9c~SI-jXM0ywgLe9HpE7Nd9HUG2Dy5aoeEuYeJAwQK3QHlEHjc-jw8lVKf46NSLaeY-0P5bCj2D7-U7qT~CGEV8nuVZgA41m0IrUXsL1JkaTNgSCUcbi4s9E2pDO-zyed0H9msI1A__") no-repeat  center/cover;
			
		}
		.como{
			width:fit-content;
			padding-bottom:10px;
		}
		.como::before{
			content : "";
			position : absolute;
			width : 85%;
			height : 9px;
			background-color:  #E74E0F;
			bottom: 0; 
			left: 0;
		}
		.Conocenos.btn-warning{
			width:130px !important;
			border-radius:0 !important;
		}
		.cooking .container .row2{
			margin-bottom: 6rem !important;

		}
		.col-9.text-left.text-white{
			font-size: 13px;
		}

		/* row 3 styling */
		.cooking .container{
			position:relative;
			min-height:100%
		}
		.joint{
			position: absolute;
			bottom:-115px;
		}
		.joint .btn-warning{
			border-radius:0 !important;
			margin-top:10px

		}
		</style>
</div>