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
</div>

@if(isset($users))
    <div class="container">
        <h2 class="text-center">List of all registered clients</h2>
        <hr />
        <div class="container method">
            <div class="row margin-0 list-header hidden-sm hidden-xs">
                <div class="col-md-1"><div class="header">ID</div></div>
                <div class="col-md-2"><div class="header">Name</div></div>
                <div class="col-md-3"><div class="header">E-mail</div></div>
                <div class="col-md-2"><div class="header">Company</div></div>
                <div class="col-md-2"><div class="header">City</div></div>
                <div class="col-md-1"><div class="header">Verified</div></div>
                <div class="col-md-1"></div>
            </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach($users as $key=>$user)		
                    <div class="row margin-0">	
	                    <div class="col-md-1">
                            <div class="cell">
                                <div class="propertyname">
                                    <span name="id[]">{{ $user['id'] }}</span>
                                </div>
                            </div>
                        </div>
                         <div class="col-md-2">
                            <div class="cell">
                                <div class="propertyname">
                                    <span name="name[]">{{ $user['first_name'] }} {{ $user['last_name'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="cell">
                                <div class="description">
                                    <span name="email[]">{{ $user['email'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="isrequired">
                                    <span name="company[]">{{ $user['company'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="description">
                                    <span name="city[]">{{ $user['city'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="cell">
                                <div class="description">
                                    <span name="verified[]">{{ $user['is_verified'] }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="cell">
                                <div class="description">
                            		<a class="btn btn-success" href="/clients/{{ $user['id'] }}">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection