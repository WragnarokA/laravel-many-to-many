@extends('layouts.admin')

@section('content')

<div class="row justify-content-between gap-3 m-5">
   
            
    @foreach ($posts as $post)
    <div class="card" style="width: 18rem;">
        <img src="{{$post->image}}" class="card-img-top" alt="{{$post->title}}">
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          {{-- <p class="card-text">{{$post->content}}</p> --}}
          <ul class="list-group">
          @foreach ($post->tags as $tag)
            <li class="list-group-item">{{ $tag->name }}</li>
          @endforeach
          </ul>
          <p class="card-text">{{$post->type ? $post->type->name : "Non ha il Type"}}</p>
          <a href="{{ route("admin.posts.show", $post->id)}}" class="btn btn-primary">Vista Detagliata</a>

        </div>
      </div>
        
    @endforeach


</div>
@endsection