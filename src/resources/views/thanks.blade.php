@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks">
    <div class="thanks__message">
        お問い合わせありがとうございました
    </div>

    <form class="back-home" action="/" method="get">
        <button class="back-home__button" type="submit">HOME</button>
    </form>

    <div class="thanks__background">
        Thank you
    </div>
</div>
@endsection