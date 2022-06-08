@extends('dashboard')

@section('content')
<div class="mx-6 font-bold text-center border-slate-500 border-2">
<h1 class="px-6">{{ $post->title }}</h1>
<p class="px-6">{{ $post->body}}</p>
</div>


@if ($post->comments)
@foreach($post->comments as $comment)
<div class="comment mx-20 text-center my-4 border-2 border-slate-500">
<h4 class="px-6 mb-4 mt-2"> {{ $comment->author }} </h4>
<p class="px-6 mb-2"> {{ $comment->body }} </p>
</div>
@endforeach

<p class="px-6 my-4"> Comment count: {{ $post->comments()->count() }}
@endif

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="/comments/store" method="POST" class="px-6">
@csrf
<div class="form-input">
<input type="text" placeholder="Author name" name="author" class=" border-2 inline-block p-3 rounded-xl px-7 my-4">
</div>
<div class="form-input">
<textarea name="body" placeholder="Comment body" class="border-2 inline-block p-3 rounded-xl px-7 my-4"></textarea>
</div>
<input type="hidden" value={{ $post->id }} name="commentable_id" >
<input type="hidden" value={{ get_class($post) }} name="commentable_type">
<input type="submit" value="Submit" class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7 rounded-xl">
<a class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7 rounded-xl" href="{{ route('posts.index') }}">
Back
</a>
</form>
@endsection