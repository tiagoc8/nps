@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Todos os projetos
                    <form action="{{url('/search')}}" class="form-inline" type="get">
                        <input class="form-control" type="search" placeholder="Pesquisa" aria-label="Search" name="query">
                        <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                    </form>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item">
                                <a title="Show details" href="/project/{{ $project->id }}">Projeto: {{ $project->name }}</a>
                                <p class="mb-0">Cliente: {{ $project->customer->name }}</p>
                            </li>
                        @endforeach

                        {{$projects->links()}}
                    </ul>
                </div>
            </div>

            <div class="mt-2">
            <a href="/project/create" class="btn btn-success btn-sm">Criar um novo projeto</a>
            </div>

        </div>
    </div>
</div>
@endsection