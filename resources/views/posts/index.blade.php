@extends('layouts.app')

@section('content')
<h1 class="mb-3">Daftar Post</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Tambah Post</a>

@if($posts->count())
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Konten</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->content }}</td>
            <td>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-info btn-sm">Lihat</a>
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="POST" class="d-inline">
                    @csrf @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus data ini?')">Hapus</button>
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

{{ $posts->links() }}
@else
<p>Tidak ada data post.</p>
@endif
@endsection