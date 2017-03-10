@extends('layouts.app')
@section('content')
    <div class="container">

        <h2 class="text-center">{{ $module }} - Google SQL Mapper</h2>
        <hr />
        <div class="container method">
            <div class="row margin-0 list-header hidden-sm hidden-xs">
                <div class="col-md-1"><div class="header">ID</div></div>
                <div class="col-md-2"><div class="header">Label</div></div>
                <div class="col-md-2"><div class="header">Custom field</div></div>
                <div class="col-md-2"><div class="header">Max length</div></div>
                <div class="col-md-2"><div class="header">Read only</div></div>
                <div class="col-md-2"><div class="header">Type</div></div>
                <div class="col-md-1"><div class="header">Required</div></div>
            </div>

            <form action="/zoho/map" method="POST" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                @foreach($rows as $key=>$row)		
                    <div class="row margin-0">
                        <div class="col-md-1">
                            <div class="cell">
                                <div class="propertyname">
                                    @if ($row['label'] == 'Email')
                                        <input type="checkbox" disabled readonly checked="checked">
                                    @else
                                        <input type="checkbox">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="propertyname">
                                    <input name="label" value="{{ $row['label'] }}" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="type">
                                    <input name="customfield" value="{{ $row['customfield'] }}" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="isrequired">
                                    <input name="maxlength" value="{{ $row['maxlength'] }}" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="description">
                                    <input name="isreadonly" value="{{ $row['isreadonly'] }}" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="cell">
                                <div class="description">
                                    <input name="type" value="{{ $row['type'] }}" placeholder="" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="cell">
                                <div class="description">
                                    <span name="req" value="{{ $row['req'] }}">{{ $row['req'] }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="container">
                    <div class="text-center">
                        <input class="btn btn-success" type="submit" name="button" value="Sync fields">   
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection