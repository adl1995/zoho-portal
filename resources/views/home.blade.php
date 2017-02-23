@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">[To be set]</div>
                <div class="panel-body">
                @if (Session::has('status'))
                    <span class="help-block">
                        <strong>{{ Session::get('status') }}</strong>
                    </span>
                @endif

                @if (Auth::user()->is_verified == 0)
                    <span class="help-block">
                        <strong>Please verify your account. For any queries, contact: mail@zoho.net</strong>
                    </span>

                @else
                    <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="api_key" class="form-group col-md-4 control-label">Zoho CRM API Key</label>
                            <div class="col-md-6">
                                <input id="api_key" type="text" class="form-control" name="api_key" value="{{ old('api_key') }}">
                            </div>
                            <div class="text-center">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
