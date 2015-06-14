@extends('master.subpage')

@section('containers')

	@include('sections.sub-banner')

	<section id="gallery-container">
		<div class="col-md-12"> 
			<div class="linebreak"></div>
			<h2 class="title text-center">Welcome to our Online Shop</h2>
			<p class="subtitle text-center">We accept most debit and credit cards.</p>

			<div id="shop-boxes">
				<div class="col-md-3 category-panel">
					<div id="category-box">
						<p class="category-title"><b>:: Categories</b></p>
						<ul class="category-list">
							<li class="active"><a href=""><i class="fa fa-caret-right"></i> Category One</a></li>
							<li><a href=""><i class="fa fa-caret-right"></i> Category Two</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-9 shop-main-outer">
					<div id="shop-box">
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-01.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-02.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-03.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-01.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-02.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4 col-xs-12">
								<div class="thumbnail wow fadeInUp">
									<div class="thumb-holder">
										<div class="rating">
											@for ($i = 0; $i < 4; $i++)
												<span class="fa fa-star"></span>
											@endfor
										</div>
										<img src="{{ asset('images/products/hair-03.jpg') }}" alt="" class="img-responsive">
									</div>
									<div class="caption">
										<h5 class="text-center product-title">Hair Name</h5>
										<p class="text-center"><b>Color:</b> color name</p>
										<p class="text-center"><b>Dimension:</b> color name</p>
										<p class="text-center amount"><b>Amount :</b> &euro; 10</p>
										<div class="text-center">
											<div class="btn-group text-center">
												<a href="" class="btn btn-default" role="button">Details</a>
												<a href="" class="btn btn-primary" role="button">Add to cart</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</section>

@stop