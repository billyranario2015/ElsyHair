@extends('master.subpage')

@section('containers')

	@include('sections.sub-banner')

	<section id="news-container">
		<div class="col-md-12"> 
			<div class="linebreak"></div>
			<h2 class="title text-center">News</h2>
			<p class="subtitle text-center">Here you will find our latest news, information and promotions</p>

			<div class="media">
			  	<div class="media-left">
				    <img src="{{ asset( 'images/news/news-1.jpg' ) }}" class="img-news">
			  	</div>
			  	<div class="media-body">
			    	<h4 class="media-heading">News heading</h4>
			   		<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>

			   		<p class="text-right">
			   			<a href="" class="btn btn-primary btn-sm">Read More</a>
			   		</p>
			  	</div>
			</div>
			<div class="media">
			  	<div class="media-left">
				    <img src="{{ asset( 'images/news/news-2.jpg' ) }}" class="img-news">
			  	</div>
			  	<div class="media-body">
			    	<h4 class="media-heading">News heading</h4>
			   		<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>

			   		<p class="text-right">
			   			<a href="" class="btn btn-primary btn-sm">Read More</a>
			   		</p>
			  	</div>
			</div>
			<div class="media">
			  	<div class="media-left">
				    <img src="{{ asset( 'images/news/news-3.jpg' ) }}" class="img-news">
			  	</div>
			  	<div class="media-body">
			    	<h4 class="media-heading">Join on this event this coming 18th of July <small class="text-info pull-right"><i class="fa fa-calendar-o"></i> 15 days to go</small></h4>
			   		<p>Dummy text is text that is used in the publishing industry or by web designers to occupy the space which will later be filled with 'real' content. This is required when, for example, the final text is not yet available. Dummy text is also known as 'fill text'. It is said that song composers of the past used dummy texts as lyrics when writing melodies in order to have a 'ready-made' text to sing with the melody. Dummy texts have been in use by typesetters since the 16th century.</p>
			   		
			   		<p class="text-right">
			   			<button data-toggle="modal" data-target="#event-registration" class="btn btn-default btn-sm" ><i class="fa fa-flag"></i> Join Now</button>
			   			<a href="" class="btn btn-primary btn-sm">Read More</a>
			   		</p>
			  	</div>
			</div>
			
		</div>
		<div class="clearfix"></div>
	</section>

	<!-- Event Registration Modal -->
	<div class="modal fade" id="event-registration" role="dialog" aria-labelledby=>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title"><i class="fa fa-flag"></i> Join this event</h4>
				</div>
				<div class="modal-body" style="overflow: hidden">
					<div class="col-md-12">
						<form>
							<div class="form-group">
								<label>Name:</label>
								<input type="text" class="form-control" placeholder="Johanna Doe">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input type="email" class="form-control" placeholder="example@gmail.com">
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="4" placeholder="Tell us.."></textarea>
							</div>
						</form>	
					</div>	
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-primary">Join</button>
				</div>
			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

@stop