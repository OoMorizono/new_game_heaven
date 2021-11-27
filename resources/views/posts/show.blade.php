@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<x-flash-message :message="session('notice')" />

<x-validation-errors :errors="$errors" />

<div class="container">
    <div class="row">
        <div class="col-4">
            <div class="slider">
                <img src="{{ $post->image_url }}" alt="" class="rounded square3-img">
                <img src="{{ $post->image_url }}" alt="" class="rounded square3-img">
                <img src="{{ $post->image_url }}" alt="" class="rounded square3-img">
            </div>
        </div>
        {{-- 商品詳細 --}}
        <div class="col-8 rounded">
            <div class="col-12 bg-white mb-3 rounded">
                <h3 class="pt-3 font-weight-bold" style="color:#333333;">{{ $post->title }}</h3>
                <div class="mb-3">
                    <h6 class="text-secondary">
                        <span class="">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->
                                created_at
                                ?
                                'NEW'
                                : '' }}</span>
                        {{ $post->created_at }}
                    </h6>
                </div>
                <div class="mb-3">
                    <h3 class="text-danger">¥2,000</h3>
                </div>
                <div class="content pb-3 mt-1">
                    <form action="{{ asset('charge') }}" method="POST">
                        {{ csrf_field() }}
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                            data-key="{{ env('STRIPE_KEY') }}" data-amount="1000" data-name="Stripe Demo"
                            data-label="ルームを購入する" data-description="Online course about integrating Stripe"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                            data-locale="auto" data-currency="JPY">
                        </script>
                    </form>
                </div>
            </div>

            <div class="col-12 bg-white pb-3 rounded">
                <h4 class="pt-3 font-weight-bold" style="color:#666666;">商品の説明</h4>
                <hr>
                <table class="table-bordered  mt-2">
                    <div>
                        
                    </div>
                    <colgroup span="1" style="width:200px;background-color:#efefef;"></colgroup>
                    <tbody class="" style="color:#333333">
                        <tr>
                            <th>出品者</th>
                            <td>{{ $post->women->name }}</td>
                        </tr>
                        <tr>
                            <th>予約日時</th>
                            <td style="width:510px;">11/21 21:30</td>
                        </tr>
                        <tr>
                            <th>時間</th>
                            <td style="width:510px;">2時間</td>
                        </tr>
                        <tr>
                            <th>ボイスチャット</th>
                            <td style="width:510px;">有り</td>
                        </tr>
                        <tr>
                            <th>顔出し</th>
                            <td style="width:510px;">無し</td>
                        </tr>
                        <tr class="">
                            <th>詳細</th>
                            <td class="text-wrap">
                                {{ $post->body }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
                <button class="" style="background-color:#efefef;">
                    <a href="{{ route('posts.edit', $post) }}"
                        class="" style="color:#8c94aa;">編集</a>
                </button>
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};"
                        class="" style="background-color:#efefef; color:#8c94aa;">
                </form>
        </div>
    </div>
    
    @endsection