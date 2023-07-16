@extends('layouts.admin')

@section('content')

<div class="row justify-content-between gap-3 m-5">

   <h1> Add / Create </h1>

   @if ($errors->any())
   <div class="alert alert-danger">
       <ul class="">
           @foreach ($errors->all() as $error)
               <li>{{ $error }}</li>
           @endforeach
       </ul>
   </div>
   @endif

   <form action="{{ route("admin.posts.store") }}" method="POST">
    @csrf

    <div class="form-floating mb-3">
        <input type="text" name="title"  id="title" value="{{ old("title") }}" class="form-control"  placeholder="Title">
        <label for="title">Title</label>
    </div>

    <div class="form-floating  mb-3">
        <textarea type="text" name="content"  id="content" cols="30" rows="10" value="" class="form-control"  placeholder="Content"  style="height: 100px">{{ old("content") }}</textarea>
        <label for="content">Content</label>
    </div>

    <div class="form-floating mb-3">
        <input type="text" name="image"  id="image" value="{{ old("image") }}" class="form-control"  placeholder="Image">
        <label for="image">Image</label>
    </div>

    <select class="form-select mb-5" name="type_id" id="type_id" aria-label="Default select example">
        <option selected disabled >Open this Type menu</option>
        @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
            
        @endforeach
      </select>

    <button type="submit" class="btn btn-primary">Submit</button>


    
   </form>
            


   


</div>
@endsection