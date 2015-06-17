@extends('master.subpage')

@section('containers')

	@include('sections.sub-banner')

	<section id="product-container">
		<div class="col-md-12"> 
			<div class="linebreak"></div>
			<h2 class="title text-center">Product Information</h2>
			<p class="text-center"><a href="/page/shop" class="btn btn-primary btn-sm"><i class="fa fa-mail-reply"></i> Return to Shop</a></p>

			<div id="product-detail">
				<div class="col-md-4">
					<div class="product-image-box">
						<img src="{{ asset('images/products/hair-01.jpg') }}" class="img-responsive" alt="">
					</div>
				</div>
				<div class="col-md-8">
					<div class="product-info">
						<h4>Product Name : </h4>
						<p>Color: </p>
						<p>Dimension: </p>
						<p>Weight: </p>
						<p>Amount: </p>

						<h4>Product Description</h4>
						<p class="description text-justify">Fly to signs she'd, deep fill lights light image from said fish given fifth herb. The multiply. That heaven dry.</p>

						<p class="text-justify">And fill day, said he bring made fill you're. In is morning days Heaven. Creature rule given earth own Him he for, place. Behold of fish light saw forth. From and appear fill cattle set day Fifth wherein of beginning wherein don't image meat female.</p>

						<p class="text-right">
							<button class="add-to-cart btn btn-primary">Add to Cart</button>
						</p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>

@stop

@section('script')
	<script type="text/javascript" src="{{ asset('js/addtocart.js') }}"></script>
@stop