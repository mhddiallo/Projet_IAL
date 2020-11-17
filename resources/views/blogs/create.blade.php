@extends('layouts.app')

@section('content')
@include('partials.tinymce')

   <div class="container-fluid">
       <div class="jumbotron">
           <h1 style="text-align: center;">Publier un nouveau blog</h1>
       </div>

       <div class="col-md-12">
           <form action="{{ route('blogs.store') }}" method="post" enctype="multipart/form-data">

              @include('partials.error-message')

               <div class="form-group">
                   <label for="title">Titre</label>
                   <input type="text" name="title" class="form-control">
               </div>

               <div class="form-group">
                   <label for="body">Description</label>
                   <textarea name="body" class="form-control my-editor">{!! old('body') !!}</textarea>
               </div>

               <div class="form-group form-check form-check-inline">
                @foreach($categories as $category)
                  <input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input">
                  <label class="form-check-label btn-margin-right">{{ $category->name }}</label>
                @endforeach
               </div>

               {{-- <div class="form-group">
                 <label for="featured_image"></label>
                 <input type="file" name="featured_image" class="form-control">
               </div> --}}

               <div class="form-group">
                  <label class="btn btn-default">
                   <span class="btn btn-outline btn-sm btn-info">Selectionner une image</span>
                   <input type="file" name="featured_image" class="form-control" hidden>
                 </label>
               </div>

              <div>
                <button class="btn btn-primary" type="submit" style="display: block; margin: 0 auto;">Publier</button>
              </div>
               {{ csrf_field() }}
           </form>
       </div>
   </div>

@endsection
