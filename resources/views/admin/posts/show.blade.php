@extends('layouts.app')

@section('content')
    <div class="container-fluid">
         <h1>{{$post->title}}</h1>
         <p>slug : {{$post->slug}}</p>

         <p>content : {{$post->content}}</p>

         <img src="{{$post->img}}" alt="">
         <div class="mb-4">
            @foreach($post->tags as $tag)
                {{$tag->name}}
            @endforeach
        </div>
                  
         <form action="{{route("admin.posts.destroy", $post->id)}}" method="POST"  onsubmit="return confirm('awant to delet this element?')">
            @csrf
            @method("DELETE")
            <button type="submit" class="btn btn-danger">cancella</button>
        </form>
    
        <a href="{{route("admin.posts.index")}}"><button class="btn btn-primary ">back</button></a>
    
    </div>
@endsection