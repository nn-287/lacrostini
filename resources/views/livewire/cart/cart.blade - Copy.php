
<div>
@include('livewire.layouts.header')



<!-- ============== SECTION PAGETOP ============== -->
<section class="bg-primary padding-y-sm">
<div class="container">
	<ol class="breadcrumb ondark mb-0">
        <li class="breadcrumb-item"> <a href="#">Home</a>  </li>
        <li class="breadcrumb-item active"> Shopping cart  </li>
    </ol>
</div> <!-- container //  -->
</section>
<!-- ============== SECTION PAGETOP END// ============== -->

<section class="padding-y bg-light">
<div class="container">

<!-- =================== COMPONENT CART+SUMMARY ====================== -->
<div class="row">
	<div class="col-lg-9">

		<div class="card">
		<div class="content-body">
			<h4 class="card-title mb-4">Your shopping cart</h4>
			<article class="row gy-3 mb-4">
				<div class="col-lg-5">
					<figure class="itemside me-lg-5">
						<div class="aside"><img src="images/items/11.jpg" class="img-sm img-thumbnail"></div>
						<figcaption class="info">
							<a href="#" class="title">Winter jacket for men and lady</a>
							<p class="text-muted"> Yellow, Jeans </p>
						</figcaption>
					</figure>
				</div>
				<div class="col-auto">
					<select style="width: 100px" class="form-select">
						<option>1</option>
						<option>2</option>	
						<option>3</option>	
						<option>4</option>	
					</select> 
				</div>
				<div class="col-lg-2 col-sm-4 col-6">
					<div class="price-wrap lh-sm"> 
						<var class="price h6">$1156.00</var>  <br>
						<small class="text-muted"> $460.00 / per item </small> 
					</div> <!-- price-wrap .// -->
				</div>
				<div class="col-lg col-sm-4">
					<div class="float-lg-end">
						<a href="#" class="btn btn-light"> <i class="fa fa-heart"></i></a> 
						<a href="#" class="btn btn-light text-danger"> Remove</a>
					</div>
				</div>
			</article> <!-- row.// -->

			<article class="row gy-3 mb-4">
				<div class="col-lg-5">
					<figure class="itemside me-lg-5">
						<div class="aside"><img src="images/items/12.jpg" class="img-sm img-thumbnail"></div>
						<figcaption class="info">
							<a href="#" class="title">Mens T-shirt Cotton Base</a>
							<p class="text-muted"> Blue, Medium </p>
						</figcaption>
					</figure>
				</div>
				<div class="col-auto">
					<select style="width: 100px" class="form-select">
						<option>1</option>
						<option>2</option>	
						<option>3</option>	
						<option selected>4</option>	
					</select> 
				</div>
				<div class="col-lg-2 col-sm-4 col-6">
					<div class="price-wrap lh-sm"> 
						<var class="price h6">$44.80</var>  <br>
						<small class="text-muted"> $12.20 / per item </small> 
					</div> <!-- price-wrap .// -->
				</div>
				<div class="col-lg col-sm-4">
					<div class="float-lg-end">
						<a href="#" class="btn btn-light"> <i class="fa fa-heart"></i></a> 
						<a href="#" class="btn btn-light text-danger"> Remove</a>
					</div>
				</div>
			</article> <!-- row.// -->

			<article class="row gy-3 mb-4">
				<div class="col-lg-5">
					<figure class="itemside me-lg-5">
						<div class="aside"><img src="images/items/13.jpg" class="img-sm img-thumbnail"></div>
						<figcaption class="info">
							<a href="#" class="title">Blazer Suit Dress Jacket for Men</a>
							<p class="text-muted"> XL size, Jeans, Blue </p>
						</figcaption>
					</figure>
				</div>
				<div class="col-auto">
					<select style="width: 100px" class="form-select">
						<option>1</option>
						<option>2</option>	
						<option selected>3</option>	
						<option>4</option>	
					</select> 
				</div>
				<div class="col-lg-2 col-sm-4 col-6">
					<div class="price-wrap lh-sm"> 
						<var class="price h6">$1156.00</var>  <br>
						<small class="text-muted"> $460.00 / per item </small> 
					</div> <!-- price-wrap .// -->
				</div>
				<div class="col-lg col-sm-4">
					<div class="float-lg-end">
						<a href="#" class="btn btn-light"> <i class="fa fa-heart"></i></a> 
						<a href="#" class="btn btn-light text-danger"> Remove</a>
					</div>
				</div>
			</article> <!-- row.// -->

		</div> <!-- card-body .// -->

		<div class="content-body border-top">
			<p><i class="me-2 text-muted fa-lg fa fa-truck"></i> Free Delivery within 1-2 weeks</p>
			<p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip</p>
		</div> <!-- card-body.// -->

		</div> <!-- card.// -->

	</div> <!-- col.// -->
	<aside class="col-lg-3">

		<div class="card mb-3">
		<div class="card-body">
		<form>
			<div class="form-group">
				<label class="form-label">Have coupon?</label>
				<div class="input-group">
					<input type="text" class="form-control" name="" placeholder="Coupon code">
					<button class="btn btn-light">Apply</button>
				</div>
			</div>
		</form>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

		<div class="card">
		<div class="card-body">
			<dl class="dlist-align">
			  <dt>Total price:</dt>
			  <dd class="text-end"> $329.00</dd>
			</dl>
			<dl class="dlist-align">
			  <dt>Discount:</dt>
			  <dd class="text-end text-success"> - $60.00 </dd>
			</dl>
			<dl class="dlist-align">
			  <dt>TAX:</dt>
			  <dd class="text-end"> $14.00 </dd>
			</dl>
			<hr>
			<dl class="dlist-align">
			  <dt>Total:</dt>
			  <dd class="text-end text-dark h5"> $357.90 </dd>
			</dl>
			
			<div class="d-grid gap-2 my-3">
				<a href="#" class="btn btn-success w-100"> Make Purchase </a>
				<a href="#" class="btn btn-light w-100"> Back to shop </a>
			</div>
		</div> <!-- card-body.// -->
		</div> <!-- card.// -->

	</aside> <!-- col.// -->

</div> <!-- row.// -->
<!-- =================== COMPONENT 1 CART+SUMMARY .//END  ====================== -->

<br><br>

</div> <!-- container .//  -->
</section>



<!-- ============== SECTION  ============== -->
<section class="padding-y border-top">
<div class="container">
	<header class="section-heading">
		<h4 class="section-title">Recommended items</h4>
	</header> 

	<div class="row">
		<div class="col-lg-3 col-sm-6 col-12">
			<figure class="card card-product-grid">
				<div class="img-wrap">
					<span class="topbar">
						<a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
						<span class="badge bg-danger"> New </span>
					</span>
					<a href="#"><img src="images/items/7.jpg"></a>
				</div>
				<figcaption class="info-wrap border-top">
					<a href="#" class="title">Gaming Headset with Mic</a>
						<div class="price-wrap mb-3">
							<strong class="price">$18.95</strong>
							<del class="price-old">$24.99</del>
						</div> <!-- price-wrap.// -->
						<a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
				</figcaption>
			</figure> <!-- card // -->
		</div> <!-- col.// -->
		<div class="col-lg-3 col-sm-6 col-12">
			<figure class="card card-product-grid">
				<div class="img-wrap"> 
					<span class="topbar">
						<a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
					</span>
					<a href="#"><img src="images/items/8.jpg"></a>
				</div>
				<figcaption class="info-wrap border-top">
					<a href="#" class="title">Apple Watch Series 1 Sport </a>
					<div class="price-wrap mb-3">
						<strong class="price">$120.00</strong>
					</div> <!-- price-wrap.// -->
					<a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
				</figcaption>
			</figure> <!-- card // -->
		</div> <!-- col.// -->
		<div class="col-lg-3 col-sm-6 col-12">
			<figure class="card card-product-grid">
				<div class="img-wrap"> 
					<span class="topbar">
						<a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
					</span>
					<a href="#"><img src="images/items/9.jpg"></a>
				</div>
				<figcaption class="info-wrap border-top">
					<a href="#" class="title"> Men's Denim Jeans Shorts  </a>
					<div class="price-wrap mb-3">
						<strong class="price">$80.50</strong>
					</div> <!-- price-wrap.// -->
					<a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
				</figcaption>
			</figure> <!-- card // -->
		</div> <!-- col.// -->
		<div class="col-lg-3 col-sm-6 col-12">
			<figure class="card card-product-grid">
				<div class="img-wrap"> 
					<span class="topbar">
						<a href="#" class="float-end"><i class="fa fa-lg fa-heart"></i></a>
					</span>
					<a href="#"><img src="images/items/10.jpg"></a>
				</div>
				<figcaption class="info-wrap border-top">
					<a href="#" class="title text-truncate">Mens T-shirt Cotton Base Layer Slim fit </a>
					<div class="price-wrap mb-3">
						<strong class="price">$13.90</strong>
					</div> <!-- price-wrap.// -->
					<a href="#" class="btn btn-outline-primary w-100">Add to cart</a>
				</figcaption>
			</figure> <!-- card // -->
		</div> <!-- col.// -->
	</div> <!-- row.// -->
	
</div> <!-- container .//  -->
</section>
<!-- ============== SECTION END// ============== -->

</body>

@include('livewire.layouts.footer')

</div>