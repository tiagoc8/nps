@extends('layouts.app')

@section('content')
<div class="page">
      <div class="page-single">
        <div class="container">
          <div class="row mx-5 px-5">
            <div class="col col-login mx-5 px-5">
              <form class="card" action="{{ route('login') }}" method="post">
              @csrf
                <div class="card-body p-6">
                  <div class="card-title text-center">{{ __('Login') }}</div>

                  <div class="form-group">
                    <label class="form-label">{{ __('E-Mail') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required placeholder="Insira o email">
                    @error('email')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="form-label">
                    {{ __('Password') }}
                      <a href="{{ route('password.request') }}" class="small ml-5">{{ __('Esqueceu a password?') }}</a>
                    </label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required>
                    
                    @error('password')
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                      </span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                      <span class="custom-control-label">Manter ativo</span>
                    </label>
                  </div>

                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Entrar') }}</button>
                  </div>
                </div>
              </form>
              <div class="text-center text-muted">
                Não tem conta? <a href="./register">Registar</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
