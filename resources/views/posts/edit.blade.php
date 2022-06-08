@extends('dashboard')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="/posts/edit/{{$post->id}}" method="post" class="px-6">
@csrf
<div class="inline-block w-14">Title:</div> <input type="text" name="title" value="{{ $post->title }}" class=" border-2 inline-block p-3 rounded-xl px-7 my-4"><br>
<div class="inline-block w-14">Body:</div> <input type="text" name="body" value="{{ $post->body }}" class=" border-2 inline-block p-3 rounded-xl px-7 my-4"><br>
<div class="inline-block w-14">Author:</div> <input type="text" name="author_name" value="{{ $post->author_name }}" class=" border-2 inline-block p-3 rounded-xl px-7 my-4"><br>
<input type="submit" value="Submit" class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7">
<a class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7 rounded-xl" href="{{ route('posts.index') }}">
Back
</a>

</form>

@endsection