@extends('layouts.user_base')
@section('title','送信完了')
@section('content')
 <section class="send">
    <div class="contactMainBox">
        <div class="sendMessageBox">
            <p class="sendMessageText">送信完了しました。</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">会社名：○○株式会社</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">氏名：山田太郎</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">電話番号:000-0000-0000</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">メールアドレス：test@test</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">生年月日：2025-12-08</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">性別:女</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">職業:会社員（正社員）</p>
        </div>
        <div class="dataContentItem">
            <p class="dataContentItemP">お問い合わせ内容：<br/>test</p>
        </div>
        <a href="{{route('contact.index')}}" class="submitButton">戻る</a>
    </div>
 </section>
