<?php
//共通に使う関数を記述
//XSS対応（ echoする場所で使用！それ以外はNG ）
function h($stg) {
    return htmlspecialchars($stg, ENT_QUOTES, 'UTF-8'); // 'UTF-8' を追加
}
?>