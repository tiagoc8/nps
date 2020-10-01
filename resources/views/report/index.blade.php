@extends('layouts.app')


@section('content')
<div class="container">
            <div class="page-header">
              <h1 class="page-title text-center">
                Resultados
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      +x%
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$average1}}</div>
                    <div class="text-muted mb-4">Média Geral</div>
                  </div>
                </div>
              </div>

              @foreach($clientsAnswers as $project)
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      -X%
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">{{$project->answers->pluck('question1')->avg()}}</div>
                    <div class="text-muted mb-4">{{$project->name}}</div>
                  </div>
                </div>
              </div>
              @endforeach

              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      9%
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">7</div>
                    <div class="text-muted mb-4">New Replies</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      3%
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">27.3K</div>
                    <div class="text-muted mb-4">Followers</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      -2%
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">$95</div>
                    <div class="text-muted mb-4">Daily Earnings</div>
                  </div>
                </div>
              </div>
</div>
@endsection

