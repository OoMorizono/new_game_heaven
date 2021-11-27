@extends('layouts.main')

@section('title', '詳細画面')

@section('content')

{{-- top --}}
<div class="container">
    <div class="row mb-2  bg-white rounded">
        <div class="col-1 ">
            <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                <img src="{{ url($women->profile_photo_url) }}" class="ml-2 mt-2 icon-img rounded-circle">
            </a>
        </div>
        <div class="col-2 mt-2">
            <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                <h4 class="ml-1 font-weight-bold" style="color:#333333">{{ $women->name }}</h4>
            </a>
            <h6 class=" ml-2" style="color: #666666">癒やし系</h6>
            <h6 class="text-success ml-2">●待機中</h6>
        </div>
        <div class="col-7"> </div>
        <div class="col-2 my-auto">
            <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                <img src="http://localhost/storage/event_image/フォロー.png" class="option-img" alt="">
            </a>
        </div>
    </div>
</div>


<div class="container">
    <div class="row g-2">
        {{-- プロフィール画像 --}}
        <div class="col-2 mt-2">
            <div class="slider">
                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                    <img src="{{ url($women->profile_photo_url) }}" class="rounded icon2-img ">
                </a>
                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                    <img src="{{ url($women->profile_photo_url) }}" class="rounded icon2-img ">
                </a>
                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                    <img src="{{ url($women->profile_photo_url) }}" class="rounded icon2-img ">
                </a>
            </div>
            {{-- ボイス --}}
            <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                <img src="http://localhost/storage/event_image/ボイス2.png" class="ml-0 option2-img" alt="">
            </a>
            {{-- 対応ジャンル --}}
            <div class="bg-white mt-2 col-12 rounded pt-2 text-center ">
                <h6 class="" style="color: #333333">対応ジャンル</h6>
                <div class="bt-white shadow mb-2 rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 ml-0 pl-0">
                                <a href="{{ route('womens.show', $women->id) }}">
                                    <img src="http://localhost/storage/event_image/apex.png" class="rounded skill-img"
                                        alt="">
                                </a>
                            </div>
                            <div class="text-truncate d-flex align-items-center col-6 ml-0  pl-0">
                                <a href="{{ route('womens.show', $women->id) }}"style="color: #333333" >
                                    APEX
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bt-white shadow mb-2 rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 ml-0 pl-0">
                                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                                    <img src="http://localhost/storage/event_image/valorant_room.jpeg"
                                        class="rounded skill-img" alt="">
                                </a>
                            </div>
                            <div class="text-truncate d-flex align-items-center col-6 ml-0  pl-0">
                                <a href="{{ route('womens.show', $women->id) }}" style="color: #333333">
                                    VALORANT
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bt-white shadow mb-2 rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 ml-0 pl-0">
                                <a href="#">
                                    <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                                        <img src="http://localhost/storage/event_image/あつもり_サムネ.jpeg"
                                            class="rounded skill-img" alt="">
                                    </a>
                            </div>
                            <div class="text-truncate d-flex align-items-center col-6 ml-0  pl-0">
                                <a href="{{ route('womens.show', $women->id) }}" style="color: #333333">
                                    あつ森
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bt-white shadow mb-2 rounded">
                    <div class="container">
                        <div class="row">
                            <div class="col-6 ml-0 pl-0">
                                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                                    <img src="http://localhost/storage/event_image/雑談.png" class="rounded skill-img"
                                        alt="">
                                </a>
                            </div>
                            <div class="text-truncate d-flex align-items-center col-6 ml-0  pl-0">
                                <a href="{{ route('womens.show', $women->id) }}" style="color: #333333">
                                    雑談
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <p></p>
            </div>

            {{-- プロフィール --}}
        </div>
        <div class=" col-10 ">
            <table class="table-bordered  mt-2">
                <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
                <tbody class="" style="color: #333333">
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
                        <a href="#" class="" style="color: #333333">口コミ</a>
                    </th>
                    <td>
                        <a href="#" class=""style="color: #333333">口コミ(112件):★★★★☆/ 初対面とは思えないほど､安心して一緒にゲームが出来ました!気になってる方はぜひ! </a>
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
                    <tr>
                        <th>写メ日記</th>
                        <td>
                            <div class="col-4 pt-5">
                                <a href="{{ route('womens.show', $women->id) }}" class="text-dark">
                                    <ul class="slider ">
                                        <li>
                                            <div class="pl-2  bg-info text-white">
                                                初投稿😆
                                            </div>
                                            <img src="http://localhost/storage/event_image/あつもり.jpeg" class="blog-img"
                                                alt="">昨日は沢山の...
                                        </li>
                                        <li>
                                            <div class="pl-2 bg-info text-white">
                                                お礼😊
                                            </div>
                                            <img src="http://localhost/storage/event_image/お礼.jpeg" class="blog-img"
                                                alt="">昨日は本当に...
                                        </li>
                                        <li>
                                            <div class="pl-2 bg-info text-white">
                                                朝ごはん
                                            </div>
                                            <img src="http://localhost/storage/event_image/朝ごはん.jpeg" class="blog-img"
                                                alt="">今日の朝ごは...
                                        </li>
                                        <li>
                                            <div class="pl-2 bg-info text-white">
                                                apex!
                                            </div>
                                            <img src="http://localhost/storage/event_image/チャンピョン.jpeg" class="blog-img"
                                                alt="">初ソロチャン...
                                        </li>
                                        <li>
                                            <div class="pl-2 bg-info text-white">
                                                かっこよすぎる
                                            </div>
                                            <img src="http://localhost/storage/event_image/ガンダム.jpeg" class="blog-img"
                                                alt="">クシィガンダム...
                                        </li>
                                    </ul>
                                </a>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

{{-- コメント --}}
<div class="bg-white rounded">
    <h5 class="ml-3 pt-3 font-weight-bold" style="color: #666666">
        コメント
    </h5>
    <hr class="ml-3 mr-3">
    @foreach ($comments as $comment)
    <span class="font-bold mr-3 text-secondary ml-3">{{ $comment->user->name }}</span>
    <span class="text-sm text-secondary ">{{ $comment->created_at }}</span>
    <div style=" height: 45px; ">
        <div class="d-flex align-items-center ">
            <p class="ml-3 p-1 mb-1 bg-success text-white rounded-pill h-25 d-inline-block align-top ">
                {!! nl2br(e($comment->body)) !!}
            </p>
        </div>
    </div>
    @endforeach
    <br>
    {{-- @auth --}}
    <form action="{{ route('womens.comments.store', $women) }}" method="POST" class="row g-3">
        @csrf
        <div class="col-10 ml-3">
            {{-- <input type="text" class="form-control" placeholder=""> --}}
            <textarea name="body" rows="1" class="col-12" required placeholder="">{{ old('body') }}</textarea>
        </div>
        <div class="col-auto ">
            <input type="submit" value="コメント" class=" btn btn-primary mb-3">
        </div>
    </form>
    {{-- @endauth --}}
</div>
<br>

{{-- 出品ルーム一覧 --}}
<div class="container bg-white mb-2 rounded">
    <h5 class="ml-2 pt-3 pb-3 font-weight-bold" style="color: #666666" >
        出品ルーム一覧
    </h5>
    <hr class="ml-2 mr-2">
    <div class="row g-2">
        @foreach ($posts as $post)
        <div class="col-3 border mb-3 shadow rounded">
            <div class="row">
                <div class="mx-3">
                    <div class="mt-3 mb-3">
                        <div class="card">
                            <a href="{{ route('posts.show', $post->id) }}">
                                <img class="card-img square-img" src="{{ $post->image_url }}" alt="">
                            </a>
                            <div class="card-img-overlay">
                                <img src="http://localhost/storage/event_image/値段4.png" class="option4-img" alt="">
                            </div>
                        </div>
                        <h4 class="font-weight-bold" style="color: #333333">
                            {{ $post->title }}
                        </h4>
                        <h6 class="text-secondary" style="color: #666666">
                            {{ $post->created_at }}
                        </h6>
                        <h6 class="text-secondary" style="color: #666666">
                            {{ $post->body }}
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection