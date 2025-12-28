<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Test</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main class="main">
        <div class="content">
            <div class="title">
                <h2>Contact</h2>
            </div>

            <form class="form" action="/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">お名前</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-firstname">
                            <input type="text" name="first_name" placeholder="例：山田">
                        </div>

                        <div class="form__error">
                            @error('first_name')
                                {{$errors->first('first_name')}}
                            @enderror
                        </div>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-lastname">
                            <input type="text" name="last_name" placeholder="例：太郎">
                        </div>

                        <div class="form__error">
                            @error('last_name')
                                {{$errors->first('last_name')}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">性別</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <input type="radio" name="gender" value="1:男性">男性
                        <input type="radio" name="gender" value="2:女性">女性
                        <input type="radio" name="gender" value="3:その他">その他
                    </div>

                    <div class="form__error">
                        @error('gender')
                            {{$errors->first('gender')}}
                        @enderror
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">メールアドレス</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-mail">
                            <input type="email" name="email" placeholder="例：test@example.com">
                        </div>

                        <div class="form__error">
                            @error('email')
                                {{$errors->first('email')}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">電話番号</span>
                        <span class="form__label-item">※</span>
                    </div>

                   
                    <div class="form__group-content">
                        <div class="form__input-tel">
                            <input class="form__input-tel1" type="tel" name="tel1" placeholder="080">-
                            <input class="form__input-tel2" type="tel" name="tel2" placeholder="1234">-
                            <input class="form__input-tel3" type="tel" name="tel3" placeholder="5678">
                        </div>

                        <div class="form__error">
                            @error('tel1')
                                {{$errors->first('tel1')}}
                            @enderror

                            @error('tel2')
                                {{$errors->first('tel2')}}
                            @enderror

                            @error('tel3')
                                {{$errors->first('tel3')}}
                            @enderror
                        </div>
                    </div>
                </div>


                    <!-- <div class="form__group-content">
                        <div class="form__input-tel">
                            <input class="form__input-tel-child" type="tel" name="tel1" placeholder="080">-
                        </div>

                        <div class="form__error">
                            @error('tel1')
                                {{$errors->first('tel1')}}
                            @enderror
                        </div>

                        <div class="form__input-tel">
                            <input class="form__input-tel-child" type="tel" name="tel2" placeholder="1234">-
                        </div>

                        <div class="form__error">
                            @error('tel2')
                                {{$errors->first('tel2')}}
                            @enderror
                        </div>

                        <div class="form__input-tel">
                            <input class="form__input-tel-child" type="tel" name="tel3" placeholder="5678">
                        </div>

                        <div class="form__error">
                            @error('tel3')
                                {{$errors->first('tel3')}}
                            @enderror
                        </div>
                    </div>
                </div> -->

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">住所</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-address">
                            <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3">
                        </div>

                        <div class="form__error">
                            @error('address')
                                {{$errors->first('address')}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">建物名</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-building">
                            <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101">
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">お問い合わせの種類</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-class">
                            <select name="class" placeholder="選択してください">
                                <option value="delivery">1. 商品のお届けについて</option>
                                <option value="swap">2. 商品の交換について</option>
                                <option value="trouble">3. 商品トラブル</option>
                                <option value="contact">4. ショップへのお問い合わせ</option>
                                <option value="others">5. その他</option>
                            </select>
                        </div>

                        <div class="form__error">
                            @error('class')
                                {{$errors->first('class')}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label">お問い合わせ内容</span>
                        <span class="form__label-item">※</span>
                    </div>

                    <div class="form__group-content">
                        <div class="form__input-content">
                            <textarea name="detail" cols="70" rows="6" placeholder=お問い合わせ内容をご記載ください></textarea>
                        </div>

                        <div class="form__error">
                            @error('detail')
                                {{$errors->first('detail')}}
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form__submit">
                    <button class="form__submit-button" type=submit>確認画面</button>
                </div>

            </div>






    </main>
    
</body>
</html>