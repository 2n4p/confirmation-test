@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('switching')
<form class="switching" action="/login" method="get">
    <button class="login__button" type="submit">login</button>
</form>
@endsection

@section('content')
<div class="register">
    <div class="register__title">
        Register
    </div>

    <form  class="register__content" action="/register" method="post"></form>
        @csrf
        <div class="content__group">
            <div class="group__title">
                <span class="title__name">お名前</span>
            </div>
            <div class="group__content">
                <input class="content__input" type="text" name="name" placeholder="例：山田　太郎">
            </div>
        </div>

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
            <button class="button__submit" type="submit">登録</button>
        </div>
    </form>
</div>
@endsection