@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

@if (session('notice'))
<div class="">
    {{ session('notice') }}
</div>
@endif

<div class="container">
    <div class="row">
        <h3>{{ $blog->women->name }}</h3>
        <p>{{ $blog->created_at }}</p>
        <img src="{{ $blog->image_url }}" alt="日記画像" class="square-img">
        <p>{!! nl2br(e($blog->body)) !!}</p>
    </div>
</div>
<div>
    {{-- @can('update', $blog) --}}
    <a href="{{ route('blogs.edit', $blog) }}" class="bg-success text-white">編集</a>
    {{-- @endcan --}}
    {{-- @can('delete', $blog) --}}
    <form action="{{ route('blogs.destroy', $blog) }}" method="blog">
        @csrf
        @method('DELETE')
        <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};" class="bg-danger text-white">
    </form>
    {{-- @endcan --}}
</div>

@endsection