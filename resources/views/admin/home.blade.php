@extends('layouts.admin')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 col-sm-6 col-md-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Clients</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4 p-0">
                        <div class="page-header">
                            <div class="page-title text-right">
                                <a href="/admin/clients/add" class="btn btn-sm btn-info m-t-6 m-b-6">ADD CLIENT</a>
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
                        <label class="control-label col-sm-1 col-md-2 hidden-xs text-right m-t-12 p-r-0">Bulk<span class="hidden-sm"> Actions</span></label>
                        <div class="col-sm-3 col-lg-2 hidden-xs">
                            <select class="form-control">
                                <option value="">Activate</option>
                                <option value="">Deactivate</option>
                            </select>
                        </div>
                        <div class="col-sm-1 hidden-xs p-l-0">
                            <a href="" class="btn btn-default btn-flat btn-filter-row"><span class="hidden-sm">Apply</span><span class="hidden-md hidden-lg"><span class="ti-arrow-right"></span></span></a>
                        </div>
                        <div class="col-sm-3 col-lg-4 no-padding-mobile">
                            <input type="search" class="form-control input-rounded" placeholder="Search...">
                        </div>
                        <label class="control-label col-sm-2 col-md-1 hidden-xs text-right m-t-12 p-r-0">Show:</label>
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
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>E-mail</th>
                                        <th>Company</th>
                                        <th>City</th>
                                        <th>Verified</th>
                                        <th></th>

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
                                      <td><a href="/admin/clients/{{ $user['id'] }}/edit">Edit</a></td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /# row -->
                    <div class="row">
                        <label class="control-label col-sm-1 col-md-2 hidden-xs text-right m-t-12 p-r-0">Bulk<span class="hidden-sm"> Actions</span></label>
                        <div class="col-sm-3 col-lg-2 hidden-xs">
                            <select class="form-control">
                                <option value="">Activate</option>
                                <option value="">Deactivate</option>
                            </select>
                        </div>
                        <div class="col-sm-1 hidden-xs p-l-0">
                            <a href="" class="btn btn-default btn-flat btn-filter-row"><span class="hidden-sm">Apply</span><span class="hidden-md hidden-lg"><span class="ti-arrow-right"></span></span></a>
                        </div>
                        <div class="col-sm-7 col-md-6 col-lg-7 text-right">
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
                            <div class="dataTables_info">Showing 1 to 10 of 128 entries</div>
                        </div>
                    </div>
                    <!-- /# row -->
                </div>
                <!-- /# main content -->
            </div>
            <!-- /# container-fluid -->
        </div>
        <!-- /# main -->
    </div>
    <!-- /# content wrap -->
    <!-- Modal -->
    <div aria-hidden="true" role="dialog" tabindex="-1" id="sync-data" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content text-left">
                <div class="modal-header">
                    <h4 class="modal-title">Sync'ing Data</h4>
                </div>
                <div class="modal-body">
                    <p>Please wait while we sync your data. This may take a minute.</p>
                    <div class="progress m-b-10">
                        <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Syncing Data. Please wait.</div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection