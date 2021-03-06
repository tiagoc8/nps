@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Resultados</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($projects as $project)
                            <li class="list-group-item">
                                <a title="Show details" href="/project/{{ $project->id }}">Projeto: {{ $project->name }}</a>
                                <p class="mb-0">Cliente: {{ $project->customer->name }}</p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
                <a href="{{URL::previous()}}" class="btn btn-primary btn-sm">Voltar</a>
                <a href="/" class="btn btn-primary btn-sm">Menu</a>
            </div>
            
        </div>
    </div>
</div>
@endsection