@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Todos os clientes
                <form action="{{url('/search')}}" class="form-inline" type="get">
                        <input class="form-control" type="search" placeholder="Pesquisa" aria-label="Search" name="query">
                        <button class="btn btn-outline-dark" type="submit">Pesquisar</button>
                    </form>
                </div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($customer as $customer)
                            <li class="list-group-item">
                                <a title="Show details" href="/customer/{{ $customer->id }}">{{ $customer->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="mt-2">
            <a href="/customer/create" class="btn btn-success btn-sm">Criar novo cliente</a>
            </div>

        </div>
    </div>
</div>
@endsection