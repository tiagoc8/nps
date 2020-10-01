@extends('layouts.app')

@section('content')
<body class="">
    <div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row mx-5 px-5">
            <div class="col col-login mx-5 px-5">
              <form class="card" action="{{ route('register') }}" method="post">
              @csrf
                <div class="card-body p-6">
                  <div class="card-title text-center">{{ __('Criar conta') }}</div>
                  <div class="form-group">
                    <label class="form-label">{{ __('Nome') }}</label>
                    <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="O seu nome"  name="name" value="{{ old('name') }}" required>

                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="form-label">{{ __('E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Inserir email" name="email" value="{{ old('email') }}" required>
                  
                  
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="form-label">{{ __('Confirmar Password') }}</label>
                    <input id="password-confirm" name="password_confirmation" required class="form-control" type="password" placeholder="Confirmar Password">
                  </div>

                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Registar') }}</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Já tem conta? <a href="./login">Entrar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
