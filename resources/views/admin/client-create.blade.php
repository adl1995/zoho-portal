@extends('layouts.admin')
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 p-0">
                        <div class="page-header">
                            <ol class="breadcrumb">
                              <li><a href="admin_dashboard.html">Clients</a></li>
                              <li class="active">Add Client</li>
                            </ol>
                            <div class="page-title">
                                <h1>Add Client</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                  <div class="row">
                    <form class="form-horizontal" method="POST" action="/admin/clients/add">
                	{{ csrf_field() }}
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Company</label>
                        <div class="col-sm-8">
		                  <input name="company" type="text" class="form-control" placeholder="Company Name">
	                        @if ($errors->has('company'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('company') }}</strong>
	                            </span>
	                        @endif

                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">First Name</label>
                        <div class="col-sm-8">
                          <input name="first_name" type="text" class="form-control" placeholder="First Name">
	                        @if ($errors->has('first_name'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('first_name') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label name="last_name" for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Last Name</label>
                        <div class="col-sm-8">
                          <input name="last_name" type="text" class="form-control" placeholder="Last Name">
  	                        @if ($errors->has('last_name'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('last_name') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Email</label>
                        <div class="col-sm-8">
                          <input name="email" type="email" class="form-control" placeholder="Email Address">
	                        @if ($errors->has('email'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('email') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">City</label>
                        <div class="col-sm-8">
                          <input name="city" type="text" class="form-control" placeholder="City">
	                        @if ($errors->has('city'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('city') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">State</label>
                        <div class="col-sm-8">
                          <input name="state" type="text" class="form-control" placeholder="State">
	                        @if ($errors->has('state'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('state') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Address</label>
                        <div class="col-sm-8">
                          <input name="address1" type="text" class="form-control" placeholder="Address">
	                        @if ($errors->has('address1'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('address1') }}</strong>
	                            </span>
	                        @endif
                        </div>
                     </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">ZIP</label>
                        <div class="col-sm-8">
                          <input name="zip" type="text" class="form-control" placeholder="ZIP">
	                        @if ($errors->has('zip'))
	                            <span class="help-block">
	                                <strong>{{ $errors->first('zip') }}</strong>
	                            </span>
	                        @endif
                        </div>
                      </div>
                      <div class="form-group">
                        <label name="status" for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Status</label>
                        <div class="col-sm-8">
                          <label class="radio-inline tt-none fw-light">
                            <input type="radio" name="status" id="statusActive" value="active" checked="checked"> Active
                          </label>
                          <label class="radio-inline tt-none fw-light">
                            <input type="radio" name="status" id="statusInactive" value="inactive"> Inactive
                          </label>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-sm-offset-4 col-md-offset-3 col-lg-offset-2 col-sm-8">
                          <button type="submit" class="btn btn-primary btn-flat">Add Client</button>
                          <a href="admin_dashboard.html" class="btn btn-link">Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
        				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@endsection