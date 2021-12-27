<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <title>Palmo Helloe world</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <meta name="theme-color" content="#fafafa">
</head>

<body style="margin: 0;">

<!-- Add your site or application content here -->
<!--<main style="display: flex; justify-content:center; margin-top: 25px;">-->
<!--    <img src="palmo.jpg" alt="">-->
<!--</main>-->
<?php
$strAbc = 'abc';
$strWww = 'www';
$strZzz = 'zzz';
$strRond = 'a;hio kjblk';
if (strpos($strAbc, $strRond) === 0) {
    echo str_replace($strAbc, $strWww, $strRond), "<br/>";;
} else {
    echo $strRond . $strZzz, "<br/>";
}


$strLeng = 'slava';
$simvol = 'o';
if (mb_strlen($strLeng) >= 10) {
    $strLeng = mb_strcut($strLeng, 0, 6);
    echo $strLeng, "<br/>";
} else {
    for ($x = 0; $x < strlen($strLeng); $x++) {
        if (strlen($strLeng) <= 12) {
            $strLeng = $strLeng . $simvol;
        }

    }
    echo $strLeng, "<br/>";
}


$strNum = 'ioh4lbu4ug5654';
$count = preg_match_all('/\\d/', $strNum);
echo $count, "<br/>";


$strAllWorld = 'ioug  World World World';
$strLetter = 'letter';
$strWorld = 'World';
echo str_replace($strWorld, $strLetter, $strAllWorld), "<br/>";


$xAbc = 'xabc';
$abc = 'abc';
$strXabc = 'xabc slava xabc xzzz';
echo str_replace($xAbc, $abc, $strXabc), "<br/>";

$sumAbc = 'abc abc abcoihhj b abbc';
$sumResult = preg_match_all('/abc/', $sumAbc);
echo $sumResult, "<br/>";


$s = 'ABC';
echo $s[0] . strtolower(substr($s, 1)), "<br/>";

$str = 'Пупкин Иван Васильевич';
preg_match_all('/ (.)/iu', $str, $m);

$m2 = explode(' ', $str);
echo $m2[0] . ' ' . $m[1][0] . '.' . $m[1][1] . '.', "<br/>";

$i = 1;
while ($i <= 10) {
    echo "You are welcome!<br/>";
    $i++;
}


$arr = [];
$arr = range(1, 112, 3);
$arrSum = array_sum($arr);
echo $arrSum, "<br/>";

for ($i = 0; $i < 100; $i++) {
    if (strpos($i, 3) && $i % 5 !== 0) {
        echo $i, "<br/>";
    }
}


$arrUniq = [1, 2, 2, 5, 5, 4,];
$arrUniqRes = array_unique($arrUniq);
foreach ($arrUniqRes as $val) {
    echo $val, "<br/>";
}
$a = array(1, 2, 3, 4, 5);
$min = 0;
$max = 0;
$count = count($a);
// search min and max indexes
for ($i = 1; $i < $count; $i++) {
    if ($a[$i] > $a[$max]) $max = $i;
    if ($a[$i] < $a[$min]) $min = $i;
}
// switch min and max
$a[$min] += $a[$max];
$a[$max] = $a[$min] - $a[$max];
$a[$min] = $a[$min] - $a[$max];
foreach ($a as $item) {
    echo $item, "<br/>";
}
$arr1 = array(1, 3, 5);
$arr2 = array(2, 3, 4);

$res_arr = array_merge($arr1, $arr2);
asort($res_arr);

print_r($res_arr);

$m = 100000;
$n = 999999;
$arrB = ['h'];
for ($i = $m; $i <= $n; $i++) {
    $s = (string)$i;
    $s1 = $s[0] + $s[1] + $s[2];
    $s2 = $s[3] + $s[4] + $s[5];
    if ($s1 == $s2) {
        $arrB[] = $i;
    }
}
$res = count($arrB);
$proc = $res / 1000000 * 100;
echo "<br/>", $res, 'билетов ', $proc, '%', "<br/>";


$arrDays = [
    '$ru' => ['Понедельник', 'Вторник', 'Среда', 'Четверг', 'Пятница', 'Суббота', 'Воскресенье'],
    '$en' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
];
$lang = $arrDays['$ru'];
$day = 2;

echo $arrDays['$ru'][0],' ', $arrDays['$en'][2], "<br/>";
echo $lang[$day], "<br/>";



$tabl = [1,2,3,4,5,6,7,8,9];
    $halved = array_chunk($tabl, 3);
    foreach ($halved[0] as $val1){
        echo $val1, ',';
    }
    echo "<br/>";
foreach ($halved[1] as $val2){
    echo $val2, ',';
}
echo "<br/>";
foreach ($halved[2] as $val3){
    echo $val3,',';
}
echo "<br/>";


$num = [1,2,3,4,5,6,7,8,9,10];
$index = 9;
foreach ($num as $key => $val){
    if ($key == $index) {
        [$num[0], $num[$index]] = [$num[$index], $num[0]];
        print_r($num);
    }
}






?>
</body>

</html>
<?php
//phpinfo();
