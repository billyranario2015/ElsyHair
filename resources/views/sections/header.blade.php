<section id="header">
	<div class="col-md-12">
		<div class="topbar">
			<ul class="addressbar pull-left">
				<li><i class="fa fa-clock-o"></i> Mardi au Samedi: 9am - 6pm</li>
				<li><i class="fa fa-map-marker"></i> 16 rue de Condorcet, 01210 Ferney Voltaire</li>
			</ul>
			<ul class="contactbar pull-right">
				<li>
					<div class="btn-group" id="languagebar">
					  	<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
					    <img src="{{ asset('images/english.png')}}" alt=".."> English <span class="caret"></span>
					  	</button>
					  	<ul class="dropdown-menu" role="menu">
						    <li><a href="#">Action</a></li>
						    <li><a href="#">Another action</a></li>
						    <li><a href="#">Something else here</a></li>
						    <li class="divider"></li>
						    <li><a href="#">Separated link</a></li>
					  	</ul>
					</div>
				</li>
				<li><a href="mailto:email@address.com"><i class="fa fa-envelope"></i> email@address.com</a></li>
				<li><i class="fa fa-phone"></i> 00334 50 99 23 59</li>
				<li class="divider"><i class=""></i> </li>
				<li><a href=""><i class="fa fa-facebook fa-2x"></i></a></li>
				<li><a href=""><i class="fa fa-twitter fa-2x"></i></a></li>
				<li><a href=""><i class="fa fa-google-plus fa-2x"></i></a></li>
			</ul>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-12" id="top-nav">
		<nav class="navbar navbar-default">
		  	<div class="container-fluid">
		    <div class="navbar-header">
		      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
		      	</button>
		      	<a class="navbar-brand" href="/">Elsy<span class="highlight">Hair</span></a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      	<ul class="nav navbar-nav">
			        <li @if ($data['pagename'] == 'home') class="active" @endif><a href="/">Home <span class="sr-only">(current)</span></a></li>
			        <li @if ($data['pagename'] == 'gallery') class="active" @endif ><a href="/page/gallery">Gallery</a></li>
			        <li @if ($data['pagename'] == 'shop') class="active" @endif><a href="/page/shop">Shop</a></li>
			        <li @if ($data['pagename'] == 'contact') class="active" @endif><a href="/page/contact">Contact</a></li>
			        <li @if ($data['pagename'] == 'news') class="active" @endif><a href="/page/news">News</a></li>
		      	</ul>

		      	<ul class="nav navbar-nav navbar-right">
			        <li><a href="#" id="shopping-cart"><i class="fa fa-shopping-cart"></i> </a></li>
		      	</ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div> <!-- col nav -->
	<div class="clearfix"></div>
</section> <!-- header -->