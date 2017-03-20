@extends('layouts.app')
@section('content')
        {!! Charts::assets() !!}
    </head>
    <body>
    <h2 class="text-center">Client Dashboard</h2>
    <div class="text-center container">
    <br/><br/>
            <label>Synced contacts:</label>
            <div class="row">
                <input type="text/submit/hidden/button/etc" name="synced_contacts_count" value="{{ $synced_contacts_count }}" readonly>
            </div>
            <br/>
            <label>Synced contacts time:</label>
            @foreach ($synced_contacts_times as $synced_contacts_time)
            <div class="row">
                <input type="text/submit/hidden/button/etc" name="synced_contacts_time" value="{{ $synced_contacts_time }}" readonly>
            </div>
            @endforeach
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
    @if(isset($fields))
    <div class="container">
        <h2 class="text-center">Synced data</h2>
        <hr/>
        <div class="container method">
            <div class="row margin-0 list-header hidden-sm hidden-xs">
                <div class="col-md-1"><div class="header">ID</div></div>
                <div class="col-md-3"><div class="header">Module name</div></div>
                <div class="col-md-2"><div class="header">Label</div></div>
                <div class="col-md-2"><div class="header">Custom field</div></div>
                <div class="col-md-2"><div class="header">Read only</div></div>
                <div class="col-md-2"><div class="header">Type</div></div>
            </div>
            <form action="/zoho/map" method="POST" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="module" value="{{ $fields[0]['module'] }}">
                @foreach($fields as $key=>$field)       
                    <div class="row margin-0">
                        <div class="col-md-1">
                            <div class="cell">
                                <div class="propertyname">
                                    <input id="checkbox" type="hidden" value="0" name="checkbox[{{$key}}]"/>
                                    <input id="checkbox_hidden" type='checkbox' value='1' name="checkbox[{{$key}}]"/>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="cell">
                                <div class="propertyname">
                                    <input name="module[]" value="{{ $field['module'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="propertyname">
                                    <input name="label[]" value="{{ $field['label'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="type">
                                    <input name="customfield[]" value="{{ $field['customfield'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="description">
                                    <input name="isreadonly[]" value="{{ $field['isreadonly'] }}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="description">
                                    <input name="type[]" value="{{ $field['type'] }}" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <br/>
                <div class="container">
                    <div class="text-center">
                        <input class="btn btn-success" type="submit" name="button" value="Sync with Zoho">   
                    </div>
                </div>
            </form>
        </div>
    </div>
    @else
    <div class="container">
        <div class="text-center">
            <h2>No synced data</h2>
        </div>
    </div>
    @endif
@endsection
