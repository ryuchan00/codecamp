<?php
// レスポンスのデータ形式を指定
header("Content-type: text/html; charset=UTF-8");
// 5秒間遅延させる
// sleep(5);
// reqが送られてきた場合
if (isset($_GET['req']) === TRUE) {
    // 送られてきたデータ(req)の文字数をレスポンス
    echo '送られてきた値の文字数は「' . mb_strlen($_GET['req'], 'UTF-8') . '」です';
} else {
    echo '値が送られてきませんでした';
}