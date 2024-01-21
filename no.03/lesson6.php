<?php
// 以下配列の中身をfor文を使用して表示してください。
// 表が縦横に伸びてもある程度対応できるように柔軟な作りを目指してください。
// 表示はHTMLの<table>タグを使用すること

/**
 * 表示イメージ
 *  _________________________
 *  |_____|_c1|_c2|_c3|横合計|
 *  |___r1|_10|__5|_20|___35|
 *  |___r2|__7|__8|_12|___27|
 *  |___r3|_25|__9|130|__164|
 *  |縦合計|_42|_22|162|__226|
 *  ‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾‾
 */

$arr = [
    'r1' => ['c1' => 10, 'c2' => 5, 'c3' => 20],
    'r2' => ['c1' => 7, 'c2' => 8, 'c3' => 12],
    'r3' => ['c1' => 25, 'c2' => 9, 'c3' => 130]
];

//var_dump($arr);

//横合計
$totalW_1 = array_sum($arr['r1']);
$totalW_2 = array_sum($arr['r2']);
$totalW_3 = array_sum($arr['r3']);

//縦合計
$totalH_1 = $arr['r1']['c1'] + $arr['r2']['c1'] + $arr['r3']['c1'];
$totalH_2 = $arr['r1']['c2'] + $arr['r2']['c2'] + $arr['r3']['c2'];
$totalH_3 = $arr['r1']['c3'] + $arr['r2']['c3'] + $arr['r3']['c3'];

//総合計
$totalAll = $totalW_1 + $totalW_2 + $totalW_3;

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>テーブル表示</title>
<style>
table {
    border:1px solid #000;
    border-collapse: collapse;
}
th, td {
    border:1px solid #000;
}
</style>
</head>
<body>
<?php

//１行目
echo '<table>';
echo '<tr><th></th>';
foreach($arr['r1'] as $key => $item){
    echo '<th>', $key, '</th>'; 
}
echo '<th>横合計</th></tr>';

//2行目
echo '<tr>';
echo '<td>r1</td>';
foreach($arr['r1'] as $keyA => $itemA){
    echo '<td>', $itemA, '</td>';
}
echo '<td>', $totalW_1, '</td>';
echo '</tr>';

//３行目
echo '<tr>';
echo '<td>r2</td>';
foreach($arr['r2'] as $keyB => $itemB){
    echo '<td>', $itemB, '</td>';
}
echo '<td>', $totalW_2, '</td>';
echo '</tr>';

//４行目
echo '<tr>';
echo '<td>r3</td>';
foreach($arr['r3'] as $keyC => $itemC){
    echo '<td>', $itemC, '</td>';
}
echo '<td>', $totalW_3, '</td>';
echo '</tr>';

//5行目
echo '<tr>';
echo '<td>縦合計</td>';
echo '<td>', $totalH_1, '</td>';
echo '<td>', $totalH_2, '</td>';
echo '<td>', $totalH_3, '</td>';
echo '<td>', $totalAll, '</td>';
echo '</tr>';
echo '</table>';

?>
</body>
</html>