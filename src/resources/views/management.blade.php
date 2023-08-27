<!DOCTYPE html>
<html lang="ja">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>management system</title>
    <link rel="stylesheet" href="{{asset('css/management.css')}}">
    <link rel="stylesheet" href="{{asset('css/sanitize.css')}}">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <h2>管理システム</h2>
        </div>
    </header>

    <main>
        <div class="management__system">
            <form class="form" action="/management/search" method="get">
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">お名前</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="text" name="fullname">
                        </div>
                    </div>
                    <div class="form__group-title--gender">
                        <span class="form__label-name">性別</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--radio" type="radio" name="gender" checked>全て
                            <input class="form__group-content--radio" type="radio" name="gender">男性
                            <input class="form__group-content--radio" type="radio" name="gender">女性
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">登録日</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="date" name="from_date">
                            <span class="form__group-content--tilde">~</span>
                            <input class="form__group-content--text" type="date" name="until_date">
                        </div>
                    </div>
                </div>
                <div class="form__group">
                    <div class="form__group-title">
                        <span class="form__label-name">メールアドレス</span>
                    </div>
                    <div class="form__group-content">
                        <div class="form__group-content--item">
                            <input class="form__group-content--text" type="text" name="mail">
                        </div>
                    </div>
                </div>
                <div class="form__button">
                    <button class="form__button-submit" type="submit">検索</button>
                </div>
                <div class="form__reset">
                    <input class="form__reset-button" type="reset">
                </div>
            </form>
            <div class="form__table">
                <table class="form__table-inner">
                    <tr class="form__table-row--title">
                        <th class="form__table-name">ID</th>
                        <th class="form__table-name">お名前</th>
                        <th class="form__table-name">性別</th>
                        <th class="form__table-name">メールアドレス</th>
                        <th class="form__table-name">ご意見</th>
                    </tr>
                    <tr class="form__table-row--content">
                        <td class="form__table-content">1</td>
                        <td class="form__table-content">山田太郎</td>
                        <td class="form__table-content">男性</td>
                        <td class="form__table-content">test@example.com</td>
                        <td class="form__table-content">いつもお世話になっております。</td>
                        <td class="form__table-content">
                            <form class="form__table-delete">
                                <div class="form__delete-button">
                                    <button class="delete__button" type="submit">削除</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
</html>