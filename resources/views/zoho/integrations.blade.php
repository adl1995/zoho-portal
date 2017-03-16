@extends('layouts.app')
@section('content')
  <script>
  	window.onload = function() {
      $("#checkbox-1").toggle();
      $("#checkbox-2").toggle();
      $("#form-button").toggle();
  	};
    $(function() {
      $('.activate').click(function() {
        $("#checkbox-1").toggle();
        $("#checkbox-2").toggle();
        $("#form-button").toggle();
      });
    });	
	</script>
    <h2 class="text-center">Email verification</h2>
    <p class="text-center">verify your email through Email Verifier API</p>

    <div class="container">
	    <div class="text-center">
        <button class="btn btn-success activate">Activate</button>
  			<button class="btn btn-danger deactivate">Deactivate</button>
        <br/><br/>

        <form action="/zoho/verify" method="POST" accept-charset="utf-8">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          <div class="container">
            <div class="row">
              <label class="col-md-12" id="checkbox-1">Opt-out failed emails <input name="opt_out_fail" type="checkbox"></label>
            </div>
            <div class="row">
              <label class="col-md-12" id="checkbox-2">Add note if email fails <input name="add_note_fail" type="checkbox"></label>
            </div>
            <input id="form-button" type="submit" class="btn btn-success" value="Verify">
          </div>
        </form>
      </div>
    </div>
@endsection