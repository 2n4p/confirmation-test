@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')

<div class="contact-form">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>

    <form class="contact-form__content" action="/confirm" method="post">
        @csrf

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">お名前</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__name" type="text" name="last-name" placeholder="例：山田">
                    <input class="input__name" type="text" name="first-name" placeholder="例：太郎">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">性別</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input--gender">
                    <input class="input__gender" id="man" type="radio" name="gender" value="男性">
                        <label for="man">男性</label>
                    <input class="input__gender" id="woman" type="radio" name="gender" value="女性">
                        <label for="woman">女性</label>
                    <input class="input__gender" id="other" type="radio" name="gender" value="その他">
                        <label for="other">その他</label>
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">メールアドレス</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__email" type="email" name="email" placeholder="例：test@example.com">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">電話番号</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__tel" type="text" name="tel1" maxlength="3" autocomplate="tel" placeholder="080"> -
                    <input class="input__tel" type="text" name="tel2" maxlength="4" autocomplate="tel" placeholder="1234"> -
                    <input class="input__tel" type="text" name="tel3" maxlength="4" autocomplate="tel" placeholder="5678">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">住所</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__address" type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷１−２−３">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">建物名</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__building" type="text" name="building" placeholder="例：千駄ヶ谷マンション１０１">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group">
            <div class="group__title">
                <span class="title__name">お問い合わせの種類</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <select class="input__kinds" name="kinds" placeholder="選択してください">
                        <option value="" disabled selected style="display:none;">選択してください</option>
                        <option value="商品のお届けについて">商品のお届けについて</option>
                        <option value="商品の交換について">商品の交換について</option>
                        <option value="商品トラブル">商品トラブル</option>
                        <option value="ショップへのお問い合わせ">ショップへのお問い合わせ</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__group--detail">
            <div class="group__title">
                <span class="title__name">お問い合わせ内容</span>
                <span class="title__required">※</span>
            </div>
            <div class="group__content">
                <div class="content__input">
                    <input class="input__detail" type="text" name="detail" placeholder="お問い合わせ内容をご記載ください">
                </div>
                <div class="content__error">
                    <!-- バリデーション実装後 -->
                </div>
            </div>
        </div>

        <div class="form__button">
            <button class="button__submit" type="submit">確認画面</button>
        </div>

    </form>
</div>

@endsection