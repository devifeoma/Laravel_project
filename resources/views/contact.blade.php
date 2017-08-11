@extends('master')

	@section('content')
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<legend>Contact</legend>
					<label for="name">Enter Name:</label>
					<input type="text" class="form-control" id="name" placeholder="Your name">
					<label for="email">Enter Email:</label>
					<input type="text" class="form-control" id="email" placeholder="email">
					<label for="message">Message:</label>
					<textarea class="form-control" id="message" placeholder="Enter your messages" rows="10" cols="30"></textarea>
					<br>
					<button type="submit" class="btn btn-primary">Send</button>
					
				</div>
				
			</div>
			
		</div>
	@endsection
	