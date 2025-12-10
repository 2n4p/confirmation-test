@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('switching')
<form class="switching__login" action="/register" method="get">
    <button class="login__button" type="submit">register</button>
</form>
@endsection

@section('content')
<div class="login">
    <div class="login__title">
        Register
    </div>

    <form  class="login__content" action="" method="post"></form>
        @csrf
        <div class="content__group">
            <div class="group__title">
                <span class="title__email">メールアドレス</span>
            </div>
            <div class="group__content">
                <input class="content__input" type="email" name="email" placeholder="例：test@example.com">
            </div>
        </div>

        <div class="content__group">
            <div class="group__title">
                <span class="title__pass">パスワード</span>
            </div>
            <div class="group__content">
                <input class="content__input" type="password" name="pass" placeholder="例：coachtech1106">
            </div>
        </div>

        <div class="register__button">
            <button class="button__submit" type="submit">ログイン</button>
        </div>
    </form>
</div>
@endsection