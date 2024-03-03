@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}"/>
@endsection
@section('content')
<div class="contact_form_content">
    <div class="content_title">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf
        <div class="form_group">
            <div class="form_name">
                <span>お名前<span class="red">※</span></span>
                    <input type="text" name="first_name" placeholder="例:山田" class="first_name">
                    <input type="text" name="last_name" placeholder="例:太郎" class="last_name">
            </div>
        </div>
        <div class="form_group">           
            <div class="form_gender">
                <span>性別<span class="red">※</span></span>
                    <input type="radio" name="gender" value="man" checked><span>男性</span>
                    <input type="radio" name="gender" value="woman"><span>女性</span>
                    <input type="radio" name="gender" value="other"><span>その他</span>
            </div>
        </div>
        <div class="form_group">
            <div class="form_email">
                <span>メールアドレス<span class="red">※</span></span>
                    <input type="email" name="email"  placeholder="例:test@example.com">
            </div>
        </div>
        <div class="form_group">
            <div class="form_tel">
                <span>電話番号<span class="red">※</span></span>
                    <input type="tel" name="tel1" maxlength="3" placeholder="080"><span class="hyphen">-</span>
                    <input type="tel" name="tel2" maxlength="4" placeholder="1234"><span class="hyphen">-</span>
                    <input type="tel" name="tel3" maxlength="4" placeholder="5678">
            </div>
        </div>
        <div class="form_group">
            <div class="form_address">
                <span>住所<span class="red">※</span></span>
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3">
            </div>
        </div>
        <div class="form_group">
            <div class="form_building">
                <span>建物名</span>
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101">
            </div>
        </div>
        <div class="form_group">
            <div class="form_category">
                <span>お問い合わせの種類<span class="red">※</span></span>
                    <select name="category">
                        <option value="">選択してください</option>
                        <option value="1">1.商品のお届けについて</option>
                        <option value="2">2.商品の交換について</option>
                        <option value="3">3.商品トラブル</option>
                        <option value="4">4.ショップへのお問い合わせ</option>
                        <option value="5">5.その他</option>
                    </select>
            </div>
        </div>
        <div class="form_group">
            <div class="form_text">
                <span>お問い合わせ内容<span class="red">※</span></span>
                    <textarea name="detail" cols="50" rows="10" placeholder="お問い合わせ内容をご記載ください"></textarea>
            </div>
        </div>
        <div class="form_group">
            <div class="form_button">
                <button type="submit" class="form_submit">確認画面</button>
            </div>
        </div>
    </form>
</div>
@endsection