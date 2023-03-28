<?php

// **機能を変更してみましょう①**
// 投稿数を7に変更しましょう。
// ※ 現在の投稿数は4なので、投稿を3つ追加してください。

// **機能を変更してみましょう②**
// さとうの投稿のみ表示する機能に変更しましょう。

$tweets = [
    [
        'id' => 1,
        'userName' => 'さとう',
        'tweets' => 'お腹すいた',
        'created_at' => '2022/10/22',
    ],
    [
        'id' => 2,
        'userName' => 'さとう',
        'tweets' => 'カレーを食べたい',
        'created_at' => '2022/10/23',
    ],
    [
        'id' => 3,
        'userName' => 'すずき',
        'tweets' => 'すき焼きを食べたい',
        'created_at' => '2022/10/24',
    ],
    [
        'id' => 4,
        'userName' => 'さとう',
        'tweets' => '寿司を食べたい',
        'created_at' => '2022/10/25',
    ],
    //①投稿数を7に変更(投稿を追加)
    //下記を追加
    [
        'id' => 5,
        'userName' => 'さとう',
        'tweets' => 'お腹いっぱい',
        'created_at' => '2022/10/25',
    ],
    [
        'id' => 6,
        'userName' => 'すずき',
        'tweets' => 'ケーキ食べたい',
        'created_at' => '2022/10/26',
    ],
    [
        'id' => 7,
        'userName' => 'やまだ',
        'tweets' => 'お腹すいた',
        'created_at' => '2022/10/26',
    ],
]; 

// ②さとうの投稿のみ表示する機能に変更
//'userName'が'さとう'の時だけecho　下記のコードを試して確認
// foreach ($tweets as $tweet) {
//     if ($tweet['userName'] === 'さとう') {
//         echo $tweet['userName'];
//         echo $tweet['tweets']; 
//         echo $tweet['created_at'];
//     }
// }

?>

<!-- 以下はHTMLのコードになります -->
<!-- 今は「こんな処理をしているんだな〜」とざっくり見ていただけたらと思います！ -->
<!DOCTYPE html>
<html lang="ja">

<!-- headタグの中の処理で、ブラウザのタブに表示されるタイトルを設定しています -->
    <head>
        <meta charset="UTF-8">
        <title>投稿ページ</title>
    </head>
    <!-- bodyタグの中の処理で、ブラウザ上に表示させる「タイトル」や、別の画面に遷移する「ボタン」を作成しています -->
    <body>
        <h1>投稿ページ</h1>
        <a href="top.php">
            <button type="button">綺麗なデザインでやりたい方はこちら</button>
        </a>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ユーザー名</th>
                        <th>ツイート</th>
                        <th>作成日時</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tweets as $tweet): ?>
                        <?php if ($tweet['userName'] === 'さとう'): //if文を追記 ?> 
                            <tr>
                                <td><?php echo $tweet['userName']; ?></td>
                                <td><?php echo $tweet['tweets']; ?></td>
                                <td><?php echo $tweet['created_at']; ?></td>
                            </tr>
                            <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </body>
</html>