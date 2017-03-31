@extends('layouts.admin')

@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Errors</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
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
    												<th>Company</th>
                            <th>Error</th>
    											</tr>
    										</thead>
    										<tbody>
    											<tr>
                            <td>2/27/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/27/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/27/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/26/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/26/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/26/17 @ 8:35PM <span class="label label-danger">NEW</span></td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/25/17 @ 8:35PM</td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/25/17 @ 8:35PM</td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/25/17 @ 8:35PM</td>
                            <td><a href="admin_client.html">The Grape</a></td>
    												<td>Unable to import 'David Berkheimer' from Contacts -- Missing lorem ipsum dolor sit amet.</td>
    											</tr>
                          <tr>
                            <td>2/25/17 @ 8:35PM</td>
                            <td><a href="admin_client.html">The Grape</a></td>
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
        				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

@endsection