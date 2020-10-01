@extends('layouts.app')

@section('content')
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row mx-5 px-5">
            <div class="col col-login mx-5 px-5">

            @if (session('status'))
              <div class="alert alert-success" role="alert">
                {{ session('status') }}
              </div>
            @endif

              <form class="card" action="{{ route('password.email') }}" method="post">
              @csrf

                <div class="card-body p-6">
                  <div class="card-title text-center">{{ __('Esqueceu a Password') }}</div>
                  <p class="text-muted text-center">Insira o email para fazer reset à password</p>

                  <div class="form-group">
                    <label class="form-label" for="exampleInputEmail1">{{ __('E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required aria-describedby="emailHelp" placeholder="Insira o email">

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                     @enderror
                  </div>

                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Enviar email</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Regressar à <a href="/../login">página</a> principal.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
