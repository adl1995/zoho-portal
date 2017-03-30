@extends('layouts.admin')

@section('content')

      <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 p-0">
                        <div class="page-header">
                            <ol class="breadcrumb">
                              <li><a href="admin_dashboard.html">Clients</a></li>
                              <li class="active">The Grape</li>
                            </ol>
                            <div class="page-title">
                                <h1>The Grape <a href="admin_edit-client.html"><span class="ti-pencil"></span></a></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 p-0">
                      <div class="page-header">
                          <div class="page-title text-right">
                            <span class="dib m-t-10 m-r-5">Last Sync: 2/27/17 @ 8:35PM</span> <a data-toggle="modal" href="#sync-data" class="btn btn-sm btn-info m-t-6 m-b-6">SYNC DATA</a><br />
                            <span class="dib m-r-5">Status:</span><span class="dib fw-light">Active</span>
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
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <li role="presentation" class="active"><a href="#client-errors" aria-controls="client-errors" role="tab" data-toggle="tab">Errors <span class="label label-danger">2 NEW</span></a></li>
                      <li role="presentation"><a href="#client-list" aria-controls="client-list" role="tab" data-toggle="tab">List</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                      <div role="tabpanel" class="tab-pane active" id="client-errors">
                        <div class="row">
                          <label class="control-label col-sm-2 col-sm-offset-8 col-md-1 col-md-offset-9 hidden-xs text-right m-t-12 p-r-0">Show:</label>
                          <div class="col-sm-2 hidden-xs">
                            <select class="form-control">
                              <option value="">10</option>
                            </select>
                          </div>
                        </div>
                        <div class="row m-0">
                          <div class="col-xs-12 m-t-15 table-responsive">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                              <thead>
                                <tr>
                                  <th>Timestamp</th>
                                  <th>Error</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>2/27/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/27/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/26/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/26/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/26/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/26/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/25/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/25/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/25/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                                <tr>
                                  <td>2/25/17 @ 8:35PM</td>
                                  <td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div><!-- /# row -->
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
                            <div class="dataTables_info">Showing 1 to 10 of 45 entries</div>
                          </div>
                        </div><!-- /# row -->
                      </div>
                      <div role="tabpanel" class="tab-pane" id="client-list">
                        <div class="row">
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
                                  <th>Last Name</th>
                                  <th>Email</th>
                                  <th>Date Sync'd</th>
                                  <th>Module</th> -->
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>E-mail</th>
                                  <th>Company</th>
                                  <th>City</th>
                                  <th>Verified</th>
                                </tr>
                              </thead>
                              <tbody>
                              @foreach($users as $key=>$user)
                                <tr>
                                  <td>{{ $user['id'] }}</td>
                                  <td>{{ $user['first_name'] }} {{ $user['last_name'] }}</td>
                                  <td>{{ $user['email'] }}</td>
                                  <td>{{ $user['company'] }}</td>
                                  <td>{{ $user['city'] }}</td>
                                  <td>{{ $user['is_verified'] }}</td>
                                </tr>
                              @endforeach
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div><!-- /# row -->
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
                      </div>
                    </div>
                  </div>
                </div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

@endsection