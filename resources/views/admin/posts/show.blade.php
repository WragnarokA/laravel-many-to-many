@extends('layouts.admin')

@section('content')

<div class="row justify-content-between gap-3 m-5">

   <h1>Vista Detagliata </h1>
            

    <div class="card" style="width: 18rem;">
        <img src="{{$post->image}}" class="card-img-top" alt="{{$post->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->content}}</p>
          <p class="card-text">{{$post->type ? $post->type->name : "Non ha il Type"}}</p>
          <a href="{{ route("admin.posts.index", $post->id)}}" class="btn btn-primary">Torna alla Lista</a>
        </div>

      </div>
        
   


</div>
@endsection