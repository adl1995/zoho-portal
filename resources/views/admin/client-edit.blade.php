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
                              <li><a href="admin_client.html">The Grape</a></li>
                              <li class="active">Edit</li>
                            </ol>
                            <div class="page-title">
                                <h1>Edit Client: The Grape</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                  <div class="row">
                    <form class="form-horizontal">
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Company</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="Company Name" value="The Grape">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">First Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="First Name" value="Matt">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Last Name</label>
                        <div class="col-sm-8">
                          <input type="text" class="form-control" placeholder="Last Name" value="Hartstick">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Email</label>
                        <div class="col-sm-8">
                          <input type="email" class="form-control" placeholder="Email Address" value="email@domain.com">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="" class="col-sm-4 col-md-3 col-lg-2 control-label">Status</label>
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
                          <button type="submit" class="btn btn-primary btn-flat">Save Changes</button>
                          <a href="admin_client.html" class="btn btn-link">Cancel</a>
                        </div>
                      </div>
                    </form>
                  </div>
        				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->
@endsection