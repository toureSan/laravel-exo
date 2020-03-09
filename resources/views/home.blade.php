@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Welcome to the pannel administration</div>
                <p>You can already choose a card</p>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="container">
                        <div class="row">
                          <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img src="https://i.ytimg.com/vi/7dZIouvolms/maxresdefault.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Movie</h5>
                                  <p class="card-text">Discover all the movie</p>

                                  <a href="http://localhost:8888/movie" class="btn btn-primary">movie</a>

                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www.onefm.ch/wp-content/uploads/2019/07/65637602_2331236173591573_7924289638364086272_o-1000x600.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Cinema</h5>
                                  <p class="card-text">Discover all the Cinema</p>
                                  <a href="#" class="btn btn-primary">cinema</a>
                                </div>
                              </div>
                          </div>
                          <div class="col-sm">
                            <div class="card" style="width: 18rem;">
                                <img src="https://www4.pictures.zimbio.com/gi/Berenice+Bejo+Artist+Premiere+64th+Annual+mi92nid0rr8l.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Artiste</h5>
                                  <p class="card-text">Discover all the Artiste</p>
                                  <a href="http://localhost:8888/artist" class="btn btn-primary">Artiste</a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
