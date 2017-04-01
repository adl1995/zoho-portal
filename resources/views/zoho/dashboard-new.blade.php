@extends('layouts.admin')
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 col-md-7 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-5 p-0">
                      <div class="page-header">
                          <div class="page-title text-right">
                            <span class="dib m-t-10 m-r-5">Last Sync: 3h ago</span> <a data-toggle="modal" href="#sync-data" class="btn btn-sm btn-info m-t-6 m-b-6">SYNC DATA</a>
                          </div>
                      </div>
                    </div>
                </div>
                <div class="main-content">
                  <div class="row">
                    <div class="alert alert-success fade in alert-dismissable">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                        <strong>Success!</strong> Indicates a successful or positive action.
                    </div>
                  </div>
        					<div class="row">
        						<div class="col-md-4">
                      <div class="card">
                        <div class="stat-widget-one">
              						<div class="stat-icon dib"><i class="ti-user color-pink border-pink"></i></div>
              						<div class="stat-content dib">
              							<div class="stat-text">Total Imported</div>
              							<div class="stat-digit">128</div>
              						</div>
                        </div>
                      </div>
        						</div>
                    <div class="col-md-4">
                      <div class="card">
                        <div class="stat-widget-one">
              						<div class="stat-icon dib"><i class="ti-thumb-up color-pink border-pink"></i></div>
              						<div class="stat-content dib">
              							<div class="stat-text">Emails Verified</div>
              							<div class="stat-digit">84%</div>
              						</div>
                        </div>
                      </div>
        						</div>
                    <div class="col-md-4">
                      <div class="card">
                        <div class="stat-widget-one">
              						<div class="stat-icon dib"><i class="ti-stats-up color-pink border-pink"></i></div>
              						<div class="stat-content dib">
              							<div class="stat-text">Active Users</div>
              							<div class="stat-digit">32%</div>
              						</div>
                        </div>
                      </div>
        						</div>
        					</div><!-- /# row -->
        					<div class="row">
                    <div class="col-sm-12">
                      <h4>Users Imported from Zoho</h4>
                    </div>
                    <div class="col-sm-4">
                      <input type="search" class="form-control input-rounded" placeholder="Search...">
                    </div>
                    <div class="col-sm-2 col-sm-offset-4 text-right p-r-0 hidden-xs">
                      <label class="control-label m-t-10">Show:</label>
                    </div>
                    <div class="col-sm-2 hidden-xs">
                      <select class="form-control">
                        <option value="">10</option>
                      </select>
                    </div>
        						<div class="col-xs-12 m-t-15">
                      <table id="bootstrap-data-table" class="table table-striped table-bordered">
    										<thead>
    											<tr>
    												<th>First Name</th>
    												<th>Last Name</th>
    												<th>Email</th>
    												<th>Date Sync'd</th>
                        							<th>Module</th>
    											</tr>
    										</thead>
    										<tbody>
							                @foreach($synced_data as $key=>$field)
    											<tr>
    												<td>{{ $field->user->first_name }}</td>
    												<td>{{ $field->user->last_name }}</td>
    												<td>{{ $field->user->email }}</td>
    												<td>{{ $field->user->last_sync_data }}</td>
                        							<td><a href="/zoho/{{ $field['module'] }}/fields/">{{ $field['module'] }}</a></td>
    											</tr>
    										@endforeach
    										</tbody>
    									</table>
        						</div>
        					</div>
                  <div class="row">
                    <div class="col-sm-7">
                      <div class="dataTables_paginate paging_simple_numbers">
                        <ul class="pagination m-t-0">
                          <li class="paginate_button previous disabled"><a href="#">Previous</a></li>
                          <li class="paginate_button active"><a href="#">1</a></li>
                          <li class="paginate_button "><a href="#">2</a></li>
                          <li class="paginate_button "><a href="#">3</a></li>
                          <li class="paginate_button "><a href="#">...</a></li>
                          <li class="paginate_button next"><a href="#">Next</a></li>
                        </ul>
                      </div>
                    </div>
                    <div class="col-sm-5 text-right">
                      <div class="dataTables_info">Showing 1 to 10 of 128 entries</div>
                    </div>
                  </div><!-- /# row -->
        				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

@endsection