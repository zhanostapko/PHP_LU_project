@extends('dashboard')

@section('content')
<a href="{{ route('posts.create') }}">
<div class="hover:bg-slate-500 mx-12 mb-8 border-2 inline-block p-3 rounded-xl px-7">

Create

</div>
</a>

<table class="border-collapse border border-gray-300 mx-5 divide-y divide-gray-300 ">
<thead class="bg-slate-400">
<th>ID</th>
<th>Title</th>
<th>Body</th>
<th>Author name</th>
<th>Actions</th>
</thead>
<tbody class="divide-y divide-gray-300">
@foreach($posts as $post)
<tr>
<td class="px-6 py-4">{{ $post->id }}</td>
<td class="px-6 py-4 text-center">{{ $post->title }}</td>
<td class="px-6 py-4">{{ $post->body }}</td>
<td class="px-6 py-4 text-center">{{ $post->author_name }}</td>
<td class="px-6 py-4 text-center">
<a class="border-2 hover:bg-emerald-300 rounded-xl px-6 py-2 inline-block " href="{{ route('posts.show', ['post' => $post->id]) }}">
Show
</a>
<a class="border-2 rounded-xl px-6 py-2 hover:bg-blue-400 inline-block " href="{{ route('posts.edit', ['post' => $post->id]) }}">
Edit
</a>
<a class="border-2 mt-2 rounded-xl px-6 py-2 inline-block hover:bg-red-600" href="{{ route('posts.delete', ['post' => $post->id]) }}">
Delete
</a>
</td>
</tr>
@endforeach
<tbody>
</table>

@endsection