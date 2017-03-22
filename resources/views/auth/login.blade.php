<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KDG Zoho Admin Panel | Log In</title>
    	<!-- ================= Favicon ================== -->
        <link rel="shortcut icon" href="/images/favicon.ico">
        <link rel="apple-touch-icon" href="/images/favicon.ico">
    	<!-- Styles -->
        <link href="/css/lib/font-awesome.min.css" rel="stylesheet">
        <link href="/css/lib/themify-icons.css" rel="stylesheet">
        <link href="/css/lib/bootstrap.min.css" rel="stylesheet">
        <link href="/css/lib/unix.css" rel="stylesheet">
        <link href="/css/style.css" rel="stylesheet">
    </head>
    <body class="bg-primary">
    	<div class="unix-login">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-6 col-lg-offset-3">
    					<div class="login-content">
    						<div class="login-logo">
    							<a href="index.html"><img alt="KDG" src="/images/logo.png"><span>Zoho Admin Portal</span></a>
    						</div>
                <div class="login-form">
                  <div class="login-tab custom-tab">
                      <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOG IN</a></li>
                          <li role="presentation"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">SIGN UP</a></li>
                      </ul>
                      <div class="tab-content">
                          <div role="tabpanel" class="tab-pane active" id="login">
                    	<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                        	{{ csrf_field() }}
                              <div class="form-group">
                                <label>Email *</label>
                                <input name="email" type="email" class="form-control" placeholder="Email Address">
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group">
                                <label>Password *</label>
                                <label class="pull-right">
                                  <a href="#forgot-password" data-toggle="modal">Forgot Password?</a>
                                </label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
								@if ($errors->has('password'))
								    <span class="help-block">
								        <strong>{{ $errors->first('password') }}</strong>
								    </span>
								@endif
                              </div>
                              <button type="submit" class="btn btn-primary btn-flat m-b-15">Log in</button>
                            </form>
                          </div>
                          <div role="tabpanel" class="tab-pane" id="register">
                            <form>
                              <div class="form-group">
                                <label>Full Name *</label>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="First Name">
                                  </div>
                                  <div class="col-sm-6">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <label>Email *</label>
                                    <input type="email" class="form-control" placeholder="Email Address">
                                  </div>
                                  <div class="col-sm-6">
                                    <label>Company</label>
                                    <input type="text" class="form-control" placeholder="Company">
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Address Line 1 *</label>
                                <input type="text" class="form-control" placeholder="Address Line 1">
                              </div>
                              <div class="form-group">
                                <label>Address Line 2</label>
                                <input type="text" class="form-control" placeholder="Address Line 2">
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-5">
                                    <label>City *</label>
                                    <input type="text" class="form-control" placeholder="City">
                                  </div>
                                  <div class="col-sm-3">
                                    <label>State *</label>
                                    <select class="form-control">
                                      <option>--</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-4">
                                    <label>ZIP *</label>
                                    <input type="text" class="form-control" placeholder="ZIP">
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group">
                                <label>Create Password * <span class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Minimum 8 characters: one uppercase, one lowercase, one number, and one special character.  No spaces."></span></label>
                                <input type="password" class="form-control" placeholder="Password">
                              </div>
                              <div class="form-group">
                                <label>Confirm Password *</label>
                                <input type="password" class="form-control" placeholder="Confirm Password">
                              </div>
                              <button type="submit" class="btn btn-primary btn-flat m-b-15">Sign Up</button>
                            </form>
                          </div>
                      </div>
                  </div>
                </div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>

      <!-- Modal -->
      <div aria-hidden="true"  role="dialog" tabindex="-1" id="forgot-password" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content text-left">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                      <h4 class="modal-title">Forgot Password?</h4>
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label>Email *</label>
                        <input type="email" class="form-control" placeholder="Email Address">
                      </div>
                      <button type="submit" class="btn btn-primary btn-flat m-b-5" data-dismiss="modal" href="#password-success" data-toggle="modal">Send Password Reset Link</button>
                    </form>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Modal -->
      <div aria-hidden="true"  role="dialog" tabindex="-1" id="password-success" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content text-left">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                      <h4 class="modal-title">Password Reset Link Sent!</h4>
                  </div>
                  <div class="modal-body">
                    <p>We have sent a reset link to the email address you entered. Reset links expire one hour after being sent.</p>
                  </div>
              </div>
              <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <script src="/js/lib/jquery.min.js"></script>
      <!-- jquery vendor -->
      <script src="/js/lib/bootstrap.min.js"></script>
      <!-- bootstrap -->
      <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
      </script>
    </body>
</html>
