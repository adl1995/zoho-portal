@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Notifications</div>
                <div class="panel-body">
                @if (Session::has('status'))
                    <span class="help-block">
                        <strong>{{ Session::get('status') }}</strong>
                    </span>
                @endif

                @if (Auth::user()->verified == 0)
                    <span class="help-block">
                        <strong>Please verify your account. For any queries, contact: mail@zoho.net</strong>
                    </span>

                @else
                    <label for="api_key" class="col-md-4 control-label">Zoho CRM API Key</label>
                    <form action="{{ route('login') }}" method="post" accept-charset="utf-8">
                        {{ csrf_field() }}
                        <div class="col-md-6">
                            <input id="api_key" type="text" class="form-control" name="api_key" value="{{ old('api_key') }}">
                        </div>
                    </form>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
