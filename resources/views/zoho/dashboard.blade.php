@extends('layouts.app')
@section('content')

        {!! Charts::assets() !!}

    </head>
    <body>
    <h2 class="text-center">Client Dashboard</h2>
    <div class="text-center container">
    <br/><br/>
        <div class="row">
            <div class="col-md-2">
                <label>Synced contacts:</label>
            </div>
            <div class="col-md-2">
                <input type="text/submit/hidden/button/etc" name="synced_contacts_count" value="{{ $synced_contacts_count }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <label>Synced contacts time:</label>
            </div>
            @foreach ($synced_contacts_times as $synced_contacts_time)
            <div class="col-md-2">
                <input type="text/submit/hidden/button/etc" name="synced_contacts_time" value="{{ $synced_contacts_time }}" readonly>
            </div>
            @endforeach
        </div>
    </div>
    <br/><br/>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                {!! $email_activity_chart->render() !!}
            </div>
            <div class="col-md-6">
                {!! $user_activity_chart->render() !!}
            </div>
        </div>
    </div>
@endsection
