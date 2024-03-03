@extends('layouts.app')
@section('css')
<link rel="stylesheet" href="{{asset('css/confirm.css')}}"/>
@endsection
@section('content')
<div class="contact_form_content">
    <div class="content_title">
        <h2>Confirm</h2>
    </div>
    <form class="form" action="/contacts" method="post">
        @csrf
        <div class="confirm_table">
            <table class="table_inner">
                <tr class="table_row">
                    <th class="table_header">お名前</th>
                    <td class="table_text">
                        <input type="text" name="first_name" value="{{$contact['first_name']}}" readonly/>
                        <input type="text" name="last_name" value="{{$contact['last_name']}}" reafonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">性別</th>
                    <td class="table_text">
                        <input type="text" name="gender" value="{{$contact['gender']}}" readonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">メールアドレス</th>
                    <td class="table_text">
                        <input type="text" name="email" value="{{$contact['email']}}" readonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">電話番号</th>
                    <td class="table_text">
                        <input type="text" name="tel" value="{{$contact['tel']}}" readonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">住所</th>
                    <td class="table_text">
                        <input type="text" name="address" value="{{$contact['address']}}" readonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">建物名</th>
                    <td class="table_text">
                        <input type="text" name="building" value="{{$contact['building']}}" readonly/>
                    </td>
                </tr>

                <tr class="table_row">
                    <th class="table_header">お問い合わせ内容</th>
                    <td class="table_text">
                        <input type="text" name="detail" value="{{$contact['detail']}}" readonly/>
                    </td>
                </tr>
            </table>
            <div class="form_button">
                <button type="submit" class="form_submit">送信</button>
            </div>
        </div>
    </form>
</div>