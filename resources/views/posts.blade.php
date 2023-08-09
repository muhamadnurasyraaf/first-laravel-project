

@extends('layout.main')

@section('container')
   
   <div class="row">
      <div class=" col-md-6 mx-auto">
         <form action="/post">
           <div class="input-group mb-3">
            <input type="text" class="form-control" name="search" placeholder="Search.." value="{{ request('search') }}">
            <button class="btn btn-danger" type="submit" id="button-addon2">Search</button>
           </div>
         </form>
      </div>
   </div>

   @if ($count > 0)
      @foreach ($posts as $post)
      <article class="mb-5 border p-5 rounded">
         <a href="/post/{{ $post->id }}" class="text-decoration-none"><h2>{{ $post->title }}</h2></a>
         <a href="/user/{{ $post->user_id }}" class="text-decoration-none">{{ $post->user->name }}</a>
         <p>{{ $post->body }}</p>
         <a href="/post/{{ $post->id }}" >Read More..</a>
      </article>
     
      @endforeach

      {{ $posts->links() }}
   @else
       <h5 class="text-center">Posts Not Available</h5>
   @endif
  
@endsection