<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // POSTリクエストからURLを取得
    $url = $_POST['url'];

    // cURLを使用して外部ウェブサイトのコンテンツを取得
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);

    // cURLリクエストを閉じる
    curl_close($ch);

    if ($result) {
        // 取得したコンテンツを表示
        echo $result;
    } else {
        echo "URLの取得に失敗しました。";
    }
}
?>
