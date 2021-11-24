@extends('layouts.main')

@section('title', '詳細画面')

@section('content')

<div class="row">
    <div class="ml-3">
        <div class="mt-3 mb-3">
            <img src="{{ url($women->profile_photo_url) }}" class="square-img">
            <h3>
                <a href="{{ route('womens.show', $women->id) }}">{{ $women->name }}</a>
            </h3>
            <h6 class="text-secondary">癒やし系</h6>
            <h6 class="text-success">●待機中</h6>
        </div>
    </div>
</div>

<a class="nav-link text-secondary" href="{{ route('chatroom') }}">チャットを開始<span class="sr-only">(current)</span></a>

<table class="table-bordered mb-5 mt-3">
    <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
    <tbody>
        <tr>
        <tr>
            <th>料金</th>
            <td>¥800:30分</td>
        </tr>
        <tr>
            <th>ボイスチャット中の顔出し</th>
            <td>有り</td>
        </tr>

        <th>
            <a href="#">口コミ</a>
        </th>
        <td>
            <a href="#">口コミ(112件):★★★★☆/ 初対面とは思えないほど､安心して一緒にゲームが出来ました!気になってる方はぜひ! </a>
        </td>
        </tr>
        <tr>
            <th>対応ゲーム</th>
            <td>Apex､モンハン､あつ森､Valorant､雑談</td>
        </tr>
        <tr>
            <th>自己紹介</th>
            <td>
                {{ $women->profile }}
            </td>
        </tr>
    </tbody>
</table>


<div class="container">
    <div class="row g-2">
        <div class="col-2">
            <ul class="slider">
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
                <li>写メ日記!<img src="http://localhost/storage/event_image/あつもり.jpeg" class="" alt="">昨日は沢山の...</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <h4>ルーム一覧</h4>
    <div class="row g-2">
        @foreach ($posts as $post)                            
        <div class="col-3 border mb-5  shadow">
            <div class="row">
                <div class="ml-3">
                    <div class="mt-3 mb-3">
                        <img src="{{ $post->image_url }}" class="square-img">
                        <h3>
                            {{ $post->title }}
                        </h3>
                        <h6 class="text-secondary">
                            {{ $post->created_at }}
                        </h6>
                        <h6 class="text-secondary">
                            {{ $post->body }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<a href="{{ route('womens.index') }}">戻る</a>
@endsection