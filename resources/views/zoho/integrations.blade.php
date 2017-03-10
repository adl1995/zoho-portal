@extends('layouts.app')
@section('content')
	<script>
	window.onload = function() {
    $("#checkbox-1").toggle();
    $("#checkbox-2").toggle();
	};
    $(function() {
      $('.activate').click(function() {
      $("#checkbox-1").toggle();
      $("#checkbox-2").toggle();
    });
  });	
	</script>
    <h2 class="text-center">Email verification</h2>
    <p class="text-center">verify you email through Email Verifier API</p>

    <div class="container">
	    <div class="text-center">
      <button class="btn btn-success activate">Activate</button>
			<button class="btn btn-danger deactivate">Deactivate</button>
      <br/><br/>
      <div class="container">
        <div class="row">
          <label class="col-md-12" id="checkbox-1">Opt-out failed emails <input type="checkbox"></label>
        </div>
        <div class="row">
          <label class="col-md-12" id="checkbox-2">Add note if email fails <input id="checkbox-2" type="checkbox"></label>
        </div>
      </div>
	    </div>
    </div>
@endsection