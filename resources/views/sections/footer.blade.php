<section id="footer">
	<div class="col-md-12">
		<div class="col-md-4">
			<div class="block payment">
				<h3 class="title">Payment Accepted</h3>
				<div>
					<ul>
						<li><img src="{{ asset('images/americanexpress.png') }}" alt=""></li>
						<li><img src="{{ asset('images/maestro.png') }}" alt=""></li>
						<li><img src="{{ asset('images/mastercard.png') }}" alt=""></li>
						<li><img src="{{ asset('images/visa.png') }}" alt=""></li>
						<li><img src="{{ asset('images/cash.png') }}" alt=""></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="block services">
				<h3 class="title">Visit</h3>
				<div class="services">
					<ul>
						<li><a href="{{ url( '/' ) }}"><i class="fa fa-caret-right"></i> Home</a> </li>
						<li><a href="{{ url( '/page/gallery' ) }}"><i class="fa fa-caret-right"></i> Gallery</a> </li>
						<li><a href="{{ url( '/page/shop' ) }}"><i class="fa fa-caret-right"></i> Shop</a> </li>
						<li><a href="{{ url( '/page/contact' ) }}"><i class="fa fa-caret-right"></i> Contact</a> </li>
						<li><a href="{{ url( '/page/news' ) }}"><i class="fa fa-caret-right"></i> News</a> </li>
					</ul>
				</div>
			</div>
			
		</div>
		<div class="col-md-4">
			<div class="block contact">
				<h3 class="title">Contact Us</h3>
				<div class="contact">
					<form action="" method="post">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input name="contact[name]" type="text" placeholder="Full name" class="form-control input-sm">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
							<input name="contact[email]" type="email" placeholder="email address" class="form-control input-sm">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							<input name="contact[phone]" type="text" placeholder="phone number" class="form-control input-sm">
						</div>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-comments"></i></span>
							<textarea name="contact[enquiry]" rows="5" class="form-control"></textarea>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
<div class="clearfix"></div>
</section>