@if(Session::has('messages'))
	<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" arial-label="Close">
		<span aria-hidden="true">&times;			
		</span>		
	</button>
	{{Session::get('messages')}}
	</div>
	@endif