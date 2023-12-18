@extends('layouts.app')

@section('title','Home')

@section('content')
 <main class="cardsbg">
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
