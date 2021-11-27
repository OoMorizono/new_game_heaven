@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<div class="slider">
    {{-- <img src="http://localhost/storage/event_image/修正リリース記念画像.png" class="img-fluid"
        style="max-width: 100%;, height: 200px;" alt="s"> --}}
    <img src="http://localhost/storage/event_image/index_top.png" class="img-fluid" style="max-width: 100%;, height: auto;"
        alt="s">
    {{-- <img src="http://localhost/storage/event_image/ゲーム女子.jpeg" class="img-fluid" style="max-width: 100%;, height: auto;"
        alt="s"> --}}
    {{-- <img src="http://localhost/storage/event_image/enakorin_event_ad.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s">
    <img src="http://localhost/storage/event_image/fix_参戦_伊織もえ.png" class="img-fluid"
        style="max-width: 100%;, height: auto;" alt="s"> --}}
</div>

{{-- ゲーム一覧 --}}
<div class="container mb-4">
    <p style="color: #333333" class="font-weight-bold">人気カテゴリー</p>
    <div class="row">
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/apex.png" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                APEX
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/valorant_room.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" class="text-wrap" style="color: #333333">
                VALORANT
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/あつもり_サムネ.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                あつ森
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/lol2.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                LOL
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/スプラトゥーン.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                スプラ
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/モンハン.png" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                モンハン
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/dbd.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                DbD
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/荒野行動3.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                荒野行動
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/フォートナイト2.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                フォトナ
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/ポケユナ.jpeg" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                ポケユナ
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/雑談.png" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                雑談
            </a>
        </div>
        <div class="col-1">
            <a href="#">
                <img src="http://localhost/storage/event_image/その他.png" class="rounded skill2-img" alt="">
            </a>
            <a href="#" style="color: #333333">
                その他
            </a>
        </div>
    </div>
    <a href="#">
        <p class="mt-2 text-secondary float-right">もっと見る</p>
    </a>
    <br>
</div>

{{-- プレイヤー一蘭 --}}
<div class="container">
    <div class="row g-2 ">
        @if (!empty($womens))
        @foreach ($womens as $women)
        <div class="col-3 border mb-5 rounded shadow">
            @include('partial.women')
        </div>
        @endforeach
        @endif
    </div>
</div>

@endsection