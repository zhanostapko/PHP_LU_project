@extends('dashboard')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
<ul class="px-6 ">
@foreach ($errors->all() as $error)
<li class="text-red-600">{{ $error }}</li>
@endforeach
</ul>
</div>
@endif

<form action="/posts/create" method="post" class="px-6">
@csrf
<div class="inline-block w-14">Title:</div> <input class="my-4 rounded-xl" type="text" name="title" value="{{ old('title') }}"><br>
<div class="inline-block w-14">Body:</div> <input class="my-4 rounded-xl" type="text" name="body" value="{{ old('body') }}"><br>
<div class="inline-block w-14">Author:</div> <input class="my-4 rounded-xl" type="text" name="author_name" value="{{ old('author_name') }}"><br>
<input type="submit" value="Submit" class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7">
<a class="hover:bg-slate-500 border-2 inline-block p-3 rounded-xl px-7 rounded-xl" href="{{ route('posts.index') }}">
Back
</a>
</form>

@endsection