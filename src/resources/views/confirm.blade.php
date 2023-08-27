<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>content confirm</title>
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
    <link rel="stylesheet" href="{{asset('css/confirm.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h2>内容確認</h2>
        </div>
    </header>

    <main>
        <div class="content-confirm">
            <form class="form" action="/contact" method="post">
                @csrf
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">お名前</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="fullname" value="{{$contact['fullname']}}" readonly>
                        <input class="confirm__group-content--answer" type="text" name="fullname" value="{{$contact['fullname']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">性別</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="gender" value="{{$contact['gender']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">メールアドレス</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="email" value="{{$contact['email']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">郵便番号</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="postcode" value="{{$contact['postcode']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">住所</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="address" value="{{$contact['address']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">建物名</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="building_name" value="{{$contact['building_name']}}" readonly>
                    </div>
                </div>
                <div class="confirm__group">
                    <div class="confirm__group-title">
                        <span class="confirm__label-name">ご意見</span>
                    </div>
                    <div class="confirm__group-content">
                        <input class="confirm__group-content--answer" type="text" name="opinion" value="{{$contact['opinion']}}" readonly>
                    </div>
                </div>
                    <div class="confirm__button">
                        <button class="confirm__button-submit" type="submit">送信</button>
                    </div>
            </form>
                <div class="confirm__correct">
                    <a class="confirm__correct-link" href="">修正する</a>
                </div>
        </div>
    </main>
</body>
</html>