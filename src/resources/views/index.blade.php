<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inquiry form</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/index.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h2>お問い合わせ</h2>
        </div>
    </header>

    <main>
        <div class="inquiry-form">
            <form class="form" action="/contact/confirm" method="post">
                @csrf
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">お名前</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text---first" type="text" name="fullname" value="{{old('fullname')}}">
                            <input class="form__group-content--text---second" type="text" name="fullname" value="{{old('fullname')}}">
                        </div>
                        <div class="form__error">
                            @error('fullname')
                            <ul>
                                <li>{{$errors->first('fullname')}}</li>
                            </ul>
                            @enderror
                        </div>
                        <div class="form__error">
                            @error('fullname')
                            <ul>
                                <li>{{$errors->first('fullname')}}</li>
                            </ul>
                            @enderror
                        </div>
                        <div class="form__group-item--ex">
                            <span class="form__group-item--content">
                                例）山田
                            </span>
                            <span class="form__group-item--content---fullname2">
                                例）太郎
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">性別</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--radio" type="radio" name="gender" value="1" checked><label class="form__group-radio--label" checked>男性</label>
                            <input class="form__group-content--radio" type="radio" name="gender" value="2"><label class="form__group-radio--label">女性</label>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">メールアドレス</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="text" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form__error">
                            @error('email')
                            <ul>
                                <li>{{$errors->first('email')}}</li>
                            </ul>
                            @enderror
                        </div>
                        <div class="form__group-item--ex">
                            <span class="form__group-item--content">
                                例）test@example.com
                            </span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">郵便番号</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <span>〒</span>
                            <input class="form__group-content--text---postcode" type="text" name="postcode" value="{{old('postcode')}}">
                        </div>
                        <div class="form__error">
                            @error('postcode')
                            <ul>
                                <li>{{$errors->first('postcode')}}</li>
                            </ul>
                            @enderror
                        </div>
                        <div class="form__group-item--ex">
                            <span class="form__group-item--content---postcode">例）123-4567</span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">住所</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="text" name="address" value="{{old('address')}}">
                        </div>
                        <div class="form__error">
                            @error('address')
                            <ul>
                                <li>{{$errors->first('address')}}</li>
                            </ul>
                            @enderror
                        </div>
                        <div class="form__group-item--ex">
                            <span class="form__group-item--content">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">建物名</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="text" name="building_name" value="{{old('building_name')}}">
                        </div>
                        <div class="form__group-item--ex">
                            <span class="form__group-item--content">例）千駄ヶ谷マンション101</span>
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">ご意見</span>
                        <span class="form__label-required">※</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--textarea" type="textarea" name="opinion" value="{{old('opinion')}}">
                        </div>
                        <div class="form__error">
                            @error('opinion')
                            <ul>
                                <li>{{$errors->first('opinion')}}</li>
                            </ul>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">確認</button>
                </div>
            </form>
        </div>
    </main>
</body>
</html>