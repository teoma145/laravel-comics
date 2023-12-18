@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="cardsbg pb-5">
    <section id="cardscontent" class="container cardspop">
        <div class="bg-info currentser">
            <h3 class="text-white fs-4">CURRENT SERIES</h3>
        </div>

        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-4  col-lg-2 mt-5">
                <div class="cards">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
                <h5 class="card-title text-white  fs-6">{{$comic['title']}}</h5>
            </div>
            @endforeach
        </div>

    </section>
 </main>
@endsection
@section('info')
<div class="maindc">
    <div class="container d-flex pb-5">
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ">DC COMICS</h2>
          <ul class="list-unstyled">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
          </ul>
          <div class="col-3 col-md-1">
              <h2 class="fs-6 text-white mt-3">DC COMICS</h2>
              <ul class="list-unstyled">
              <li>Shop Dc</li>
              <li>Shop Dc collectibles</li>
          </ul>
          </div>
       </div>
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ms-5">DC</h2>
          <ul class="list-unstyled ms-5 ">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
              <li>Games</li>
              <li>Video</li>
              <li>News</li>
          </ul>
       </div>
       <div class="col-3 col-md-1">
          <h2 class="fs-6 text-white mt-5 ms-5 ps-3">SITES</h2>
          <ul class="list-unstyled ms-5 ps-3">
              <li>Characters</li>
              <li>Comics</li>
              <li>Movies</li>
              <li>TV</li>

          </ul>
       </div>
       <div class="imglog">
          <img src="{{Vite::asset('resources/img/dc-logo-bg.png')}}" alt="">
       </div>
    </div>

  </div>
@endsection
