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
			
		</div>
		<div class="clearfix"></div>
	</section>

@stop