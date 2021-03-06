@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header"><b>{{$customer->name}}</b></div>

                <div class="card-body">
                    <div class="card-header"><b>Todos os projetos</b></div>
                @foreach($customer_projects as $project)
                    <li class="list-group-item">
                        <a title="Show details" href="/project/{{ $project->id }}">Projeto: {{ $project->name }}</a>
                    </li>
                @endforeach

                <div class="mt-2 ml-2">
                    <a href="/project/create" class="btn btn-success btn-sm">Criar novo projeto</a>
                </div>

            </div>

        
            <div class="mb-2 ml-2">
                <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Voltar</a>
                <a href="/" class="btn btn-primary btn-sm">Menu</a>
            </div>

        </div>
    </div>
</div>
@endsection