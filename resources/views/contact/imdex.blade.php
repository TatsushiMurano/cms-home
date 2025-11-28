@extends('layout.user_base')
@section('title','お問い合わせ')
@section('content')
  <section class="contact">
    <div class="contactMainBox">
        <form action="{{route('contact.confirm')}}"method="GET">
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label  class=""for="company">会社名</label>
                </div>
            </div>
            <div class="inputItem">
                <input type="text" id="company" name="company" value="{{old('company')}}" class="textInput" placeholder="例）株式会社○○">
            </div>
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label class=""for="name">氏名</label>
                </div>
            </div>
            <div class="inputItem">
                <input type="text" id="name" name="name" value="{{old('company')}}" class="textInput" placeholder="例）山田太郎">
            </div>
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label class=""for="phone">電話番号</label>
                </div>
            </div>
            <div class="inputItem">
                <input type="tell" id="phone" name="phone" value="{{old('company')}}" class="textInput" placeholder="例）000-0000-0000">
            </div>
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label class=""for="mail">メールアドレス</label>
                </div>
            </div>
            <div class="inputItem">
                <input type="email" id="mail" name="mail" value="{{old('company')}}" class="textInput" placeholder="例）example@gmail.com">
            </div>
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label class=""for="birthday">生年月日</label>
                </div>
            </div>
            <div class="inputItem">
                <input type="date" id="birthday" name="birthday" value="{{old('company')}}" class="dateInput" placeholder="年/月/日">
            </div>
            <div class="contactItem">
                <div class="textItem">
                    <span class="required">必須</span>
                    <label for="sex" class="label"></label>
                </div>
            </div>
        </form>
    </div>
  </section>