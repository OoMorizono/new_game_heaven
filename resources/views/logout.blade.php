@extends('layouts.main')

@section('title', '一覧画面')

@section('content')

<form method="POST" action="{{ route($prefix . 'logout') }}">
    @csrf

    <x-jet-dropdown-link href="{{ route($prefix . 'logout') }}" onclick="event.preventDefault();
                                                                                    this.closest('form').submit();">
        {{ __('Log Out') }}
    </x-jet-dropdown-link>
</form>

@endsection