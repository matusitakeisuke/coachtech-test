@extends('layouts.contact')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css')}}">
@endsection

@section('contact')

<div class="div">
    <a class=div__text-decoration href="/">Contact</a>
</div>

<div class="contact">
    <form>
      <div class="contact__flex">
        <p class="contact__opacity">お名前</p>
        <div class="contact__flex-padding">
            ※
            <div class="contact__padding">
                <input class="contact__first" type="text">
            </div>
            <div class= contact__padding-left>
                <input class="contact__last" type="text" name="" id="">
            </div>
        </div>
      </div>
    </form>
  <div>
    <form>
      <div class="contact__flex">
        <p class="contact__opacity">性別</p>
        <div class="contact__flex-padding">
            ※
        </div>
            <div class="contact__padding-gender">
                <input class="contact__first-male" type="checkbox">
                <p class="contact__p-gender">男性</p>
            </div>
            <div class= contact__padding-woman>
                <input class="contact__last-woman" type="checkbox">
                <p class="contact__p-gender">女性</p>
            </div>
            <div class= contact__padding-woman>
                <input class="contact__others" type="checkbox">
                <p class="contact__p-gender">その他</p>
            </div>
        </div>
    </form>
  </div>
  <form>
      <div class="contact__flex">
        <p class="contact__opacity">メールアドレス</p>
        <div class="contact__flex-padding">
            ※
            <div class="contact__padding-email">
                <input class="contact__first-email" type="email">
            </div>
        </div>
      </div>
    </form>
  </div>
  <form class="form">
      <div class="contact__flex">
        <p class="contact__opacity">電話番号</p>
        <div class="contact__flex-padding">
            ※
        </div>
            <div class="tel">
              <div class= contact__padding-tel>
                <input class="contact__last-tel" type="tel" size="15">
                <p class="contact__p-tel">-</p>
              </div>
              <div class="contact__flex-tel">
                <input class="contact__last-tel" type="tel" size="15">
                <p class="contact__p-tel-absolute">-</p>
              </div>
              <div class="contact__flex-tel">
                <input class="contact__last-tel" type="tel" size="15">
                <div></div>
              </div>
            </div>
        </div>
    </div>
  </form>
  <form>
      <div class="contact__flex">
        <p class="contact__opacity">住所</p>
        <div class="contact__flex-padding">
            ※
            <div class="contact__padding-address">
                <input class="contact__address" type="text">
            </div>
        </div>
      </div>
  </form>
  <form>
      <div class="contact__flex">
        <p class="contact__opacity">建物名</p>
        <div class="contact__flex-padding">
            <div class="contact__building">
                <input class="contact__building-a" type="text">
            </div>
        </div>
      </div>
  </form>
  <form>
      <div class="contact__flex">
        <p class="contact__opacity">お問い合わせの種類</p>
        <div class="contact__flex-padding">
            ※
            <div class="contact__text-relative">
                <input class="contact__text-input" type="text">
                <select name="select" class="contact__text-select">
                    <option class="contact__text-option" value="商品の交換について"></option>
                </select>
            </div>
        </div>
      </div>
  </form>
  <form>
      <div class="contact__flex">
        <p class="contact__opacity">お問い合わせの内容</p>
        <div class="contact__flex-padding">
            ※
            <div class="contact__textarea">
                <textarea class="contact__textarea-cols" cols="30" rows="4"></textarea>
            </div>
        </div>
      </div>
  </form>
  <form>
    <div class="contact__center">
        <div class="contact__confirm">
            <a class="contact__a-padding" action="/confirm" href="">
                確認画面
            </a>
        </div>
    </div>
  </form>
@endsection