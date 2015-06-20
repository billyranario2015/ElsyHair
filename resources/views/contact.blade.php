@extends('master.subpage')

@section('containers')

	@include('sections.sub-banner')

	<section id="gallery-container">
		<div class="col-md-12"> 
			<div class="linebreak"></div>
			<h2 class="title text-center">Contact Us</h2>
			<p class="subtitle text-center">Please fill in the forms to contact us</p>

			<div class="col-md-5">
				{!! Form::open(array('url' => 'page/contact')) !!}
					{!! Form::label('text', 'Firstname') !!}
					{!! Form::text('firstname', null, ['class' => 'form-control']) !!}

					{!! Form::label('text', 'Lastname') !!}
					{!! Form::text('lastname', null, ['class' => 'form-control']) !!}

					{!! Form::label('text', 'Phone') !!}
					{!! Form::text('phone', null, ['class' => 'form-control']) !!}

					{!! Form::label('email', 'email@address.com') !!}
					{!! Form::email('email', null, ['class' => 'form-control']) !!}

					{!! Form::label('text', 'Enquiry') !!}
					{!! Form::textarea('enquiry', null, ['class' => 'form-control']) !!}

					{!! Form::submit('Submit Enquiry',  array('class' => 'btn btn-primary')) !!}
				{!! Form::close() !!}
			</div>
			<div class="col-md-7" id="map-location">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2758.781040896141!2d6.1090529999999985!3d46.254580499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c6475a7040553%3A0xb17ce92b339269e9!2s16+Rue+Condorcet%2C+01210+Ferney-Voltaire%2C+France!5e0!3m2!1sen!2sph!4v1434812058093" width="600" height="450" frameborder="0" style="border:0"></iframe>				
			</div>
			
		</div>
		<div class="clearfix"></div>
	</section>

@stop