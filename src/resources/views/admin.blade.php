@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('switching')
<form class="switching" action="/logout" method="get">
    <button class="login__button" type="submit">logout</button>
</form>
@endsection

@section('content')
<div class="admin">
    <div class="admin__title">
        <h2>Admin</h2>
    </div>
    <div class="admin__search">
        <form action="" method="post">
            <input type="text" name="input" value="{{}}" placeholder="名前やメールアドレスを入力してください">
            <select class="gender" name="gender">
                <option value="" disabled selected style="display:none;">性別</option>
                <option value="男性">男性</option>
                <option value="女性">女性</option>
                <option value="その他">その他</option>
            </select>
            <select class="kinds" name="kinds">
                <option value="" disabled selected style="display:none;">お問い合わせの種類</option>
                <option value="商品のお届けについて">商品のお届けについて</option>
                <option value="商品の交換について">商品の交換について</option>
                <option value="商品トラブル">商品トラブル</option>
                <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                <option value="その他">その他</option>
            </select>
            <input type="date" name="date" placeholder="年/月/日">
        </form>
    </div>
    <div class="admin__content">

    </div>
</div>
@endsection