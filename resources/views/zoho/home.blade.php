@extends('layouts.app')
@section('content')
<div class="container">

    <h2 class="text-center">List of Modules</h2>
    <hr />

    
    <div class="method">
        <div class="row margin-0 list-header hidden-sm hidden-xs">
            <div class="col-md-1"><div class="header">ID</div></div>
            <div class="col-md-3"><div class="header">Name (singular)</div></div>
            <div class="col-md-3"><div class="header">Name (plural)</div></div>
            <div class="col-md-2"><div class="header">GT</div></div>
            <div class="col-md-3"><div class="header">Content</div></div>
        </div>

    @foreach($rows as $row)		
        <div class="row margin-0">
            <div class="col-md-1">
                <div class="cell">
                    <div class="propertyname">
                        {{ $row['no'] }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cell">
                    <div class="type">
                        {{ $row['sl'] }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cell">
                    <div class="isrequired">
                        {{ $row['pl'] }}
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <div class="cell">
                    <div class="description">
                        {{ $row['gt'] }}
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cell">
                    <div class="description">
                        {{ $row['content'] }}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    </div>
</div>
    </body>
</html>

@endsection