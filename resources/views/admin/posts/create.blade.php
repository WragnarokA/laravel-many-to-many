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

   <form action="{{ route("admin.posts.store") }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="form-floating mb-3">
        <input type="text" name="title"  id="title" value="{{ old("title") }}" class="form-control"  placeholder="Title">
        <label for="title">Title</label>
    </div>

    <div class="form-floating  mb-3">
        <textarea type="text" name="content"  id="content" cols="30" rows="10" value="" class="form-control"  placeholder="Content"  style="height: 100px">{{ old("content") }}</textarea>
        <label for="content">Content</label>
    </div>

    <div class="mb-3">
        <label for="formFile" class="form-label">Image</label>
        <input class="form-control" type="file"  name="image"  id="image"  value="{{ old("image") }}"  placeholder="Image">
    </div>


    <select class="form-select mb-3" name="type_id" id="type_id" aria-label="Default select example">
        <option selected disabled >Open this Type menu</option>
        @foreach ($types as $type)
        <option value="{{ $type->id }}">{{ $type->name }}</option>
        @endforeach
    </select>
   
    <div class="container ">
      
         @foreach ($tags as $i => $tag)
             <div class="form-check form-switch mb-1 col-6">
                   <input class="form-check-input" value="{{ $tag->id }}" name="tags[]" id="tags{{$i}}" type="checkbox" role="switch" >
                   <label class="form-check-label" for="tags{{$i}}">{{ $tag->name }}</label>
             </div>
         @endforeach
    
    </div>

            



        
        
    <button type="submit" class="btn btn-primary my-5">Submit</button>
        


    
   </form>
            


   


</div>
@endsection