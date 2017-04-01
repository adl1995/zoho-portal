@extends('layouts.admin')
@section('content')

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row header-row">
                    <div class="col-xs-12 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Integrations</h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                  <div class="lobipanel">
                    <div class="panel lobipanel-basic panel-white">
                      <div class="panel-heading">
                        <div class="panel-title">
                          EMAIL VERIFICATION
                          <div class="checkbox checkbox-inline">
                            <label>
                              <input type="checkbox" checked="checked"> Enabled
                            </label>
                          </div>
                        </div>
                      </div>
                      <div class="panel-body">
						<p>If activated, we will use our verification technology to lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <form class="form-horizontal" action="/zoho/verify" method="POST" accept-charset="utf-8">
          				<input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <div class="form-group">
                            <div class="checkbox col-md-4 col-lg-3">
                              <label class="control-label p-t-0"><input name="opt_out_fail" type="checkbox" checked="checked"> <b>Opt-Out Failed Emails</b></label>
                            </div>
                            <div class="col-md-8 col-lg-9">
                              <p class="m-t-7 m-b-0 color-primary">If an email fails and this is checked, then it will mark the “email opt-out” field in Zoho as checked.</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="checkbox col-md-4 col-lg-3">
                              <label class="control-label p-t-0"><input name="add_note_fail" type="checkbox"> <b>Add Note if Email Fails</b></label>
                            </div>
                            <div class="col-md-8 col-lg-9">
                              <p class="m-t-7 m-b-0 color-primary">If an email fails and this is checked, then it will add a note to the record that says that the email has failed verification.</p>
                            </div>
                          </div>
		                  <div class="text-center">
							<input id="form-button" type="submit" class="btn btn-success" value="Verify">
		                  </div>
                        </form>
                      </div>
                    </div>
                  </div>
				</div><!-- /# main content -->
            </div><!-- /# container-fluid -->
        </div><!-- /# main -->
    </div><!-- /# content wrap -->

@endsection