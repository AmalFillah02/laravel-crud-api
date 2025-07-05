@extends('layouts.app')

@section('content')
    <h1>{{ isset($post) ? 'Edit' : 'Tambah' }} Post</h1>

    <form method="POST" action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}">
        @csrf
        @if(isset($post)) @method('PUT') @endif

        <div class="mb-3">
            <label class="form-label">Judul</label>
            <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Konten</label>
            <textarea name="content" class="form-control" rows="4" required>{{ old('content', $post->content ?? '') }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('posts.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
@endsection