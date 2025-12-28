<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>

    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                FashionablyLate
            </a>
        </div>
    </header>

    <main class='main'>
        <div class="confirm__content">
            <div class="confirm__title">
                <h2>Confirm</h2>
            </div>
            <form class="form" action="/store" method="post">
                @csrf
                <div class="confirm-table">
                    <table class="confirm-table__inner" style="margin-left:auto; margin-right:auto;">
                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お名前</th>
                            <td class="confirm-table__text">
                                <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly>
                                <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">性別</th>
                            <td class="confirm-table__text">
                                <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">メールアドレス</th>
                            <td class="confirm-table__text">
                                <input type="email" name="email" value="{{ $contact['email'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">電話番号</th>
                            <td class="confirm-table__text">
                                <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly>
                                <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly>
                                <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">住所</th>
                            <td class="confirm-table__text">
                                <input type="text" name="address" value="{{ $contact['address'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">建物名</th>
                            <td class="confirm-table__text">
                                <input type="text" name="building" value="{{ $contact['building'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせの種類</th>
                            <td class="confirm-table__text">
                                <input type="text" name="class" value="{{ $contact['class'] }}" readonly>
                            </td>
                        </tr>

                        <tr class="confirm-table__row">
                            <th class="confirm-table__header">お問い合わせ内容</th>
                            <td class="confirm-table__text">
                                <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly>
                            </td>
                        </tr>
                    </table>
                </div>

                <div class="form__button">
                    <button class="form__button-submit" type="submit">送信</button>

                    <a class="form__revise-button" href="javascript:history.back();">
                        修正
                    </a>
                </div>
            </form>
        </div>
    </main>
    
</body>
</html>