@extends('layouts.app')

@section('content')

                <div class="login-form">
                  <form action="{{ route('home.store') }}" method="POST" accept-charset="utf-8">
      	          {{ csrf_field() }}
	                <h4>Zoho Configuration</h4>
                    <div class="form-group">
                      <label>Zoho API Key * <span class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="Find this by logging into Zoho CRM and navigating to the Extensions & API's section under Settings > Setup."></span></label>
                      <input id="zoho_key" type="text" class="form-control" name="zoho_key" value="{{ old('zoho_key') }}" placeholder="Enter Your API Key Number">
						@if ($errors->has('zoho_key'))
							<span class="help-block">
								<strong>{{ $errors->first('zoho_key') }}</strong>
							</span>
						@endif
                    
                    </div>
                    <button type="submit" class="btn btn-primary btn-flat m-b-15">Submit API Key</button>
                  </form>
                  <div class="register-link text-center">
						<p>Don't want to enter your API Key now? <a href="#">Log out</a></p>
				  </div>
                </div>
 
      <script src="assets/js/lib/jquery.min.js"></script>
      <!-- jquery vendor -->
      <script src="assets/js/lib/bootstrap.min.js"></script>
      <!-- bootstrap -->
      <script>
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        });
      </script>

@endsection