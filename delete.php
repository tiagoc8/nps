<div class="my-3 my-md-5">
          <div class="container">
            <div class="page-header">
              <h1 class="page-title">
                Resultados
              </h1>
            </div>
            <div class="row row-cards">
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-green">
                      
                      <i class="fe fe-chevron-up"></i>
                    </div>
                    <div class="h1 m-0">{{$average1}}</div>
                    <div class="text-muted mb-4">Média Geral</div>
                  </div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      -3%
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">17</div>
                    <div class="text-muted mb-4">Closed Today</div>
                  </div>
                </div>
              </div>
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
              <div class="col-6 col-sm-4 col-lg-2">
                <div class="card">
                  <div class="card-body p-3 text-center">
                    <div class="text-right text-red">
                      -1%
                      <i class="fe fe-chevron-down"></i>
                    </div>
                    <div class="h1 m-0">621</div>
                    <div class="text-muted mb-4">Products</div>
                  </div>
                </div>
              </div>






              <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">


                <div class="card-header">Todos os resultados</div>

                    <div class="card-body">
                        <div class="card-header">Média Geral</div>
                        <ul class="list-group">
                            <li class="list-group-item">NPS: {{$average1}}</li>
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Média de Respostas por Cliente</div>
                        <div class="card-header text-center">NPS</div>
                        <ul class="list-group">
                        @foreach($clientsAnswers as $project)
                            <li class="list-group-item">{{$project->name}} - {{$project->answers->pluck('question1')->avg()}}</li>  
                        @endforeach
                        </ul>
                    </div>
                    

                    <div class="card-body">
                        <div class="card-header">Melhorias sugeridas</div>
                        <ul class="list-group">
                        @foreach($answers as $k=> $v)
                            <li class="list-group-item">{{$v -> question2}}</li>                
                        @endforeach
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Total de projetos</div>
                        <ul class="list-group">
                            <li class="list-group-item">{{$projects}}</li>  
                        </ul>
                    </div>

                    <div class="card-body">
                        <div class="card-header">Total de projetos por cliente</div>
                        <ul class="list-group">
                        @foreach($clients as $client)
                            <li class="list-group-item">{{$client->name}} - {{$client->projects->count()}}</li>  
                        @endforeach
                        </ul>
                    </div>
                    
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>