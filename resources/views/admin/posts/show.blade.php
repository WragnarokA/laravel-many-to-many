@extends('layouts.admin')

@section('content')

<div class="row justify-content-between gap-3 m-5">

   <h1>Vista Detagliata </h1>
            

    <div class="card" style="width: 18rem;">
        <img src="{{asset("storage/" . $post->image)}}" class="card-img-top" alt="{{$post->title}}">
        
        <div class="card-body">
          <h5 class="card-title">{{$post->title}}</h5>
          <p class="card-text">{{$post->content}}</p>
          @foreach ($post->tags as $tag)
          <ul class="list-group">
            <li class="list-group-item">{{$tag->name}}</li>
          </ul>
          @endforeach
          <p class="card-text">{{$post->type ? $post->type->name : "Non ha il Type"}}</p>
          <a href="{{ route("admin.posts.index", $post->id)}}" class="btn btn-primary">Torna alla Lista</a>
          
          <form action="{{ route('admin.posts.destroy', $post) }}" method="post"">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger m-4" type="submit" value="Cancella">
          </form>
          
        </div>
      </div>
        
   


</div>
@endsection