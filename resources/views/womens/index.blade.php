@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<div class="slider">
    <img src="http://localhost/storage/event_image/修正リリース記念画像.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    <img src="http://localhost/storage/event_image/ゲーム女子.jpeg" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    {{-- <img src="http://localhost/storage/event_image/enakorin_event_ad.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    <img src="http://localhost/storage/event_image/fix_参戦_伊織もえ.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s"> --}}
</div>

<div class="container">
    <div class="row g-2">
        @if (!empty($womens))
        @foreach ($womens as $women)
        <div class="col-3 border mb-5  shadow">
            @include('partial.women')
        </div>
        @endforeach
        @endif
    </div>
</div>
@endsection
