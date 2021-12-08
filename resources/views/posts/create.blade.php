@extends('layouts.main')

@section('title', '一覧画面')

@section('content')


<div class="container ">
    <div class="row test4">
        <div class="col-12 bg-white shadow text-center">
            <h4 class="my-3 font-weight-bold" style="color: #333333;">商品ルーム情報を入力</h4>
            <x-validation-errors :errors="$errors" />
            <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data" class="">
                @csrf
        </div>

        <div class="col-12 bg-light text-center">
            <img src="http://localhost/storage/event_image/カメラ.png" class="rounded option5-img" alt="">
            <label class="" for="image">
                商品画像を選択
            </label>
            <input type="file" name="image" class="">
        </div>

        <div class="col-12 bg-white shadow">
            <div class="">
                <h5 class="test8 ml-2 my-3 font-weight-bold" style="color: #666666;" for="title">
                    タイトル
                </h5>
            </div>
            <input type="text" name="title" class="ml-2 test5"  required placeholder="タイトルを入力してください"
                value="{{ old('title') }}">
            <div class="">
                <div>
                    <h5 class="font-weight-bold ml-2 mb-3 mt-4" style="color:#666666" for="body">
                        商品説明
                    </h5>
                </div>
                <textarea name="body" rows="10"  class="test5 ml-2" 
                    required>{{ old('body') }} </textarea>
            </div>
            <input type="submit" value="登録" class="mt-2 mb-3 float-right">
            </form>
        </div>
    </div>
</div>


@endsection