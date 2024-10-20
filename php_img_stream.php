<?php
//出力するファイルを読み込む(ここではPNGを前提とする)
$file_name = "./sample.png";
$contents = file_get_contents($file_name);

//画像を出力する前に明示的にレスポンスヘッダを出力する
header("Content-Type: image/png");
header('Content-Disposition: inline; filename="sample.png"');

//PNGイメージでストリーム出力
echo $contents;
?>
