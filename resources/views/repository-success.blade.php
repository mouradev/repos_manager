@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.parts.aside-menu')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    O repositório {{ $Repository->name }} foi criado

                    <code>{{ $Repository->url }}</code>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
