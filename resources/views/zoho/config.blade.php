@extends('layouts.admin')
@section('content')

    <div class="content-wrap">
        <div class="main">
          <div class="container-fluid">
            <div class="row">
              <div class="col-xs-12 p-0">
                <div class="page-header p-t-5 p-b-5">
    							<div class="page-title">
    								<h1>Zoho Configuration</h1>
    							</div>
                  <p class="m-b-15">For each module available, expand the section and select which Zoho CRM fields you'd like to map to your KDG account. For each module you wish to map to your KDG account, you must at least map the Email field.</p>
                  <div class="clearfix"></div>
    						</div>
              </div><!-- /# column -->
            </div><!-- /# row -->
    				<div class="main-content">

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    ACCOUNTS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox" checked="checked"> Enabled
                      </label>
                    </div>
                    <span class="fields">
                      <span class="ti-direction"></span>
                      Mapping 9 Fields
                    </span>
                    <span class="error">
                      <span class="ti-alert"></span>
                      1 Error
                    </span>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td class="has-error">
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                          <span class="error">You must select a field to map to "Email".</span>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                          <span class="fields">No mapping field selected.</span>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    CONTACTS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox" checked="checked"> Enabled
                      </label>
                    </div>
                    <span class="fields">
                      <span class="ti-direction"></span>
                      Mapping 4 Fields
                    </span>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    POTENTIALS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    ACTIVITIES
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    CAMPAIGNS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    CASES
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    LEADS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    SOCIAL
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    QUOTES
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    DOCUMENTS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    REPORTS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    EMAILS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <div class="panel lobipanel-basic panel-white">
                <div class="panel-heading">
                  <div class="panel-title">
                    PRODUCTS
                    <div class="checkbox checkbox-inline">
                      <label>
                        <input type="checkbox"> Enabled
                      </label>
                    </div>
                  </div>
                </div>
                <div class="panel-body">
									<table id="bootstrap-data-table" class="table table-striped table-bordered m-0">
										<thead>
											<tr>
												<th>Field in KDG Panel</th>
												<th>Field from Zoho Module</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><label class="control-label">Email*</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">First Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">First Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Last Name</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Last Name</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Phone</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Phone Number</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Company</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Company/Organization</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 1</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Address</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">Address 2</label></td>
												<td>
                          <select class="form-control">
                            <option value="">None (DO NOT MAP)</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">City</label></td>
												<td>
                          <select class="form-control">
                            <option value="">City</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">State</label></td>
												<td>
                          <select class="form-control">
                            <option value="">State/Region/Province</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
                      <tr>
												<td><label class="control-label">ZIP</label></td>
												<td>
                          <select class="form-control">
                            <option value="">Industry</option>
                            <!-- Fill w/ other available fields from Zoho CRM as options -->
                          </select>
                        </td>
											</tr>
										</tbody>
									</table>
                </div>
              </div>

              <button type="submit" class="btn btn-primary btn-flat pull-right m-b-30" data-toggle="modal" href="#configured-correctly">Save Configuration & Sync</button>

    				</div><!-- /# main content -->
          </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

    <!-- Modal -->
    <div aria-hidden="true"  role="dialog" tabindex="-1" id="configured-correctly" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content text-left">
                <div class="modal-header">
                    <h4 class="modal-title">Configured Correctly!</h4>
                </div>
                <div class="modal-body">
                  <p>Please wait while we map your data for the first time. This may take a minute. We'll redirect you to your dashboard when the data sync is complete.</p>
                  <p>Your data will be pulled once every 24 hours automatically. You can also manually refresh from your dashboard.</p>
                  <div class="progress m-b-10">
                    <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width:100%">Syncing Data. Please wait.</div>
                  </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

@endsection