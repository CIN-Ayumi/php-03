﻿<?php
// 配列に「日本,アメリカ,イギリス,フランス」を格納し、foreach文を使って順番に下記のフォーマットで出力して下さい。
// 要素番号:国名

$country = ['日本', 'アメリカ', 'イギリス', 'フランス'];

foreach($country as $countryNum => $item){
  echo '<ul style="list-style:none">';
  echo '<li>', $countryNum+1, ':', $item, '</li>' ;
  echo '</ul>';
}

?>