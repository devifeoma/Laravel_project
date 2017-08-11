@extends('master')

	@section('content')

<div class="container">
	<div class="row ">
		<div class="col-md-6">
			<h3 style="text-align: center; margin-top: 70px;">Payment Form</h3>
			<form action="{{ route('upload') }}" method="post" enctype="multipart/form-data">

					{{ csrf_field() }}
						<div class="form-group">
							<label for="email">email:</label>
							<input name="email" type="text" class="form-control">
						</div>

						<div class="form-group">
							<label for="password">Password:</label>
							<input name="password" type="password" class="form-control">
						</div>

						<div class="form-group">
							<label>Select image to upload:</label><br>
    							<input type="file" name="fileToUpload" id="fileToUpload" required=""><br>
   						
						</div>
					<button type="submit" class="btn btn-primary btn-block">Make Payment</button>
			</form>
		</div>
			@if(\Session::has('success'))
			<div class = "alert alert-info">
				{{ \Session::get('success') }}	
			</div>
			@endif
			<div class="col-md-6">
				<div class="img-thumbnail">
					
				</div>
				
			</div>
	</div>
</div>
@endsection