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

                    <form action="{{ route('repository@store') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="col-md-10">
                            <div class="form-group">
                                <label for="name">Repositório</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="">&nbsp;</label>
                                <input type="submit" class="form-control btn btn-success" value="Criar">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
