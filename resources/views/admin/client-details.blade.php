@extends('layouts.app')
@section('content')

<div class="container">
    <h2 class="text-center">Client details</h2>
	<br/><br/>
	<div class="row">
		<div class="col-md-4">
			<label>First name:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['first_name']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Last name:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['last_name']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>E-mail:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['email']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Company:</label>
		</div>
		<div class="col-md-6">
		 	<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['company']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Address 1:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['address1']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Address 2:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['address2']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>City:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['city']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>State:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['state']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>ZIP:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['zip']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Verified:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['is_verified']}}" readonly>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Zoho API key:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['first_name']}}" readonly>
		</div>
 	</div>
	<div class="row">
		<div class="col-md-4">
			<label>Created at:</label>
		</div>
		<div class="col-md-6">
			<input type="text/submit/hidden/button/etc" name="Name" value="{{$user['created_at']}}" readonly>
		</div>
	</div>
	<br/><br/>
	<div class="text-center">
		<input class="btn btn-success" type="submit" value="Verify user">
		<input class="btn btn-success" type="submit" value="Suspend">
		<input class="btn btn-success" type="submit" value="Sync">
	</div>
</div>
@endsection