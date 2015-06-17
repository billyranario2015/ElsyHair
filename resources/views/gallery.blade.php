@extends('master.subpage')

@section('styles')
	<link rel="stylesheet" href="{{ asset('css/featherlight.css') }}">
@stop

@section('containers')

	@include('sections.sub-banner')

	<section id="gallery-container">
		<div class="col-md-12"> 
			<div class="linebreak"></div>
			<h2 class="title text-center">Gallery</h2>
			<p class="subtitle text-center">Have a look at our awesome photo gallery</p>

			<div class="gallery-outer">
				<div class="gallery-inner">
					@foreach ($data['gallery_images'] as $gallery)
						<a href="#" data-featherlight="/images/gallery/{{ $gallery }}">
							<img src="{{ asset('images/gallery'). '/' . $gallery }}" alt="alt images" class="wow flipInX">
							<div class="clearfix"></div>
						</a>
					@endforeach
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
	</section>

@stop

@section('script')
	
	<script type="text/javascript" src="{{ asset('js/featherlight.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/gallery.js') }}"></script>
@stop