@extends('appadmin.master.main')

@section('admincontent')
	<h3 class="content-title">Add New Product</h3>

	<ul class="pull-right content-actions">
		<li><a href="product/add" class="btn btn-primary btn-sm"><i class="fa fa-pencil"></i> Add a product</a></li>
	</ul>

	<div class="clearfix"></div>

	{!! Form::open(['url' => '/add/product/add', 'files' => true]) !!}
		<div class="item-box">
			<div class="col-md-6">
				<div class="item">
					
						{!! Form::label('Product Name') !!}
						{!! Form::text('product_name', null, ['class' => 'form-control']) !!}

						{!! Form::label('Description') !!}
						{!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'ckedit']) !!}
					
				</div>
			</div>
			<div class="item-box">
				<div class="col-md-3">
					<div class="item">
						{!! Form::label('Product Image') !!}
						{!! Form::file('product_image') !!}
					</div>
				</div>
			</div>
			<div class="item-box">
				<div class="col-md-3">
					<div class="item">
						{!! Form::label('Stock') !!}
						{!! Form::text('stock', null, ['class' => 'form-control']) !!}

						{!! Form::label('Amount') !!}
						{!! Form::text('amount', null, ['class' => 'form-control']) !!}

						{!! Form::label('Colour') !!}
						{!! Form::text('colour', null, ['class' => 'form-control']) !!}

						{!! Form::label('Dimension') !!}
						{!! Form::text('dimension', null, ['class' => 'form-control']) !!}

						{!! Form::submit('Add Product', ['class' => 'btn btn-primary']) !!}
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	{!! Form::close() !!}
@stop

@section('scripts')
	<script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript">
		CKEDITOR.replace( 'ckedit' );
	</script>
	
@stop