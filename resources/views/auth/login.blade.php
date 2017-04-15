<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
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
                @if (Session::has('tab'))
                  <li>{!! session('tab')[0] !!}</li>
                @endif
                <div class="login-form">
                  <div class="login-tab custom-tab">
                      <ul class="nav nav-tabs" role="tablist">
                          <li role="presentation" class="{{ session('tab')[0] == 'login' ? 'active' : '' }}"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">LOG IN</a></li>
                          <li role="presentation" class="{{ session('tab')[0] == 'register' ? 'active' : '' }}"><a href="#register" aria-controls="register" role="tab" data-toggle="tab">SIGN UP</a></li>
                      </ul>
                      <div class="tab-content">
                      <div role="tabpanel" class="tab-pane {{ session('tab')[0] == 'login' ? 'active' : '' }}" id="login">
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
                                  <a href="#forgot-password-modal" data-toggle="modal">Forgot Password?</a>
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
                          <div role="tabpanel" class="tab-pane {{ session('tab')[0] == 'register' ? 'active' : '' }}" id="register">  
                      <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
	                        {{ csrf_field() }}
                              <div class="form-group">
                                <label>Full Name *</label>
                                <div class="row">
                                  <div class="col-sm-6">
                                    <input name="first_name" type="text" class="form-control" placeholder="First Name">
	                                @if ($errors->has('first_name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('first_name') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                  <div class="col-sm-6">
                                    <input name="last_name" type="text" class="form-control" placeholder="Last Name">
	                                @if ($errors->has('last_name'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('last_name') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-6">
                                    <label>Email *</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email Address">
	                                @if ($errors->has('email'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('email') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                  <div class="col-sm-6">
                                    <label>Company</label>
                                    <input name="company" type="text" class="form-control" placeholder="Company">
									@if ($errors->has('company'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('company') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label>Address Line 1 *</label>
                                <input name="address1" type="text" class="form-control" placeholder="Address Line 1">
                                @if ($errors->has('address1 1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group">
                                <label>Address Line 2</label>
                                <input name="address2" type="text" class="form-control" placeholder="Address Line 2">
                                @if ($errors->has('address2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                                @endif
                              </div>
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-5">
                                    <label>City *</label>
                                    <input name="city" type="text" class="form-control" placeholder="City">
	                                @if ($errors->has('city'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('city') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                  <div class="col-sm-3">
                                    <label>State *</label>
                                    <select class="form-control">
                                    <option value=" --- ">---</option>
                                   @foreach($states as $state=>$state_name)
                                        <option value="{{ $state }}">{{ $state_name }}</option>
                                    @endforeach
                                    </select>
									@if ($errors->has('state'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('state') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                  <div class="col-sm-4">
                                    <label>ZIP *</label>
                                    <input name="zip" type="text" class="form-control" placeholder="ZIP">
	                                @if ($errors->has('zip'))
	                                    <span class="help-block">
	                                        <strong>{{ $errors->first('zip') }}</strong>
	                                    </span>
	                                @endif
                                  </div>
                                </div>
                              </div>
                              <hr>
                              <div class="form-group">
                                <label>Create Password * <span class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Minimum 8 characters: one uppercase, one lowercase, one number, and one special character.  No spaces."></span></label>
                                <input name="password" type="password" class="form-control" placeholder="Password">
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
      <div aria-hidden="true"  role="dialog" tabindex="-1" id="forgot-password-modal" class="modal fade">
          <div class="modal-dialog">
              <div class="modal-content text-left">
                  <div class="modal-header">
                      <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                      <h4 class="modal-title">Forgot Password?</h4>
                  </div>
                  <div class="modal-body">
                  <!-- TODO: send an AJAX call for password reset -->
                    {{ csrf_field() }}
                    <div class="form-group">
                      <input type="hidden" name="token" id="token" value="{{ $token }}">
                      <label>Email *</label>
                      <input id="forgot-email" name="email" type="email" class="form-control" required>
                      <label>Password</label>
                      <input id="forgot-password-input" type="password" name="password" class="form-control" placeholder="Email Address" required autofocus>
                      <label>Confirm Password</label>
                      <input id="forgot-email-password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    </div>
                  </div>
                <button id="forgot-password" type="submit" class="btn btn-primary btn-flat m-b-5" data-dismiss="modal" href="#password-success" data-toggle="modal">Send Password Reset Link</button>
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
      // @todo: fix redirection error
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
        $("#forgot-password").button().on( "click", function(e) {
        e.preventDefault();
        alert($('meta[name="csrf-token"]').attr('content'));
        $.ajax({ url: '/password/reset',
          type: 'POST',
          beforeSend: function(xhr) {xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))},
          data: { 
            'email' : $('#forgot-email').val(),
            'password' : $('#forgot-password-input').val(),
            'password_confirmation' : $('#forgot-email-password-confirm').val(),
            'token' : $('#token').val() 
          },
          success: function(response) {
            $( '#table-id' ).load( document.URL + ' #table-id' );
          }
        });
      });
      </script>
    </body>
</html>
