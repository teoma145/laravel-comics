@extends('layouts.app')

@section('title','Home')

@section('content')
 <main>
    <section class="container">
        <h1>comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
            <div class="col-12 col-md-4  col-lg-3">
                <div class="cards">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
            </div>
            @endforeach
        </div>

    </section>
 </main>
@endsection
