@extends('layouts.app')
@section('content')
	<script>
	window.onload = function() {
  		$("#myTextField").toggle();
	};
    $(function() {
        $('button').click(function() {
          $('p').toggle;
          $("#myTextField").toggle();
        });
    });	
	</script>
    <h2 class="text-center">Email verification</h2>
    <p class="text-center">verify you email through Email Verifier API</p>

    <div class="container">
	    <div class="text-center">
			<button class="btn btn-success">Enable</button>
		    <input id="myTextField" type="text" name="myTextField" value="">
	    </div>
    </div>
@endsection