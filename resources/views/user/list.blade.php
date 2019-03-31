@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @include('layouts.parts.aside-menu')
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Usuários
                    <a href="{{ route('add-usuario') }}" class="btn btn-success btn-xs pull-right"><i class="fa fa-plus"></i> Adicionar novo</a>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nome</th>
                                <th>email</th>
                                <th>Github</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($Users as $User)
                                <tr>
                                    <td>{{ $User->id }}</td>
                                    <td>{{ $User->name }}</td>
                                    <td>{{ $User->email }}</td>
                                    <td>{{ $User->github_username }}</td>
                                </tr> 
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
