@extends('layouts.app')
@section('content')

@if(isset($users))
        <h2 class="text-center">Registered clients</h2>
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
@endsection