<pre>
<?php
//задание 1
$len = 10;
$min = 35;
$max = 42;
for ($i = 0; $i < $len; $i++) {
    $arrRandom[] = rand($min, $max);
}

//задание 2
$str = join(';', $arrRandom);
echo ($str);

//задание 3
print_r(array_unique($arrRandom));
echo (count(array_unique($arrRandom)));

//задание 4

//задание 5
$arrRange = range(-50, 50, 8);
shuffle($arrRange);
print_r($arrRange);

//задание 6
$arrFilter = array_filter($arrRange, function ($item) {
    if ($item >= 0 && $item % 2 == 0)
        return $item;
});
$sum = array_sum($arrFilter);

//задание 7
$arrFilter2 = array_filter($arrRange, function ($item) {
    if ($item % 5 == 0 || $item % 3 == 0)
        return $item;
});
$sum = array_product($arrFilter2);

//задание 8
$arr3 = array_merge($arrRandom, $arrRange);
$arr4 = $arrRandom + $arrRange;

//задание 9
sort($arr3);
$arrResSplice = array_splice($arr3, 0, 5);
echo(join('; ', $arrResSplice));

//задание 10
array_splice($arrRandom, 5, 2, [1000, 2000, 3000]);

//задание 11
$str2 = 'А роза упала на лапу Азора';
$arrRes2 = explode(' ', $str2);

//задание 12
array_pop($arrRandom);

//задание 14
$arrDes = [
    'white' => 'белый',
    'yellow' => 'желтый',
    'red' => 'красный',
    'green' => 'зеленый'
];
['white'=>$whiteColor, 'red'=>$redColor]=$arrDes;

$wgiteColor2 = $arrDes['yellow'];

//задание 15
$arrLast = [
    [
        'berry'=>'виноград',
        'color'=>'зеленый',
        'weight' => 1.5
    ],
    [
        'berry'=>'земляника',
        'color'=>'красный',
        'weight' => 0.7
    ],
    [
        'berry'=>'blueberry',
        'color'=>'фиолетовый',
        'weight' => 0.3
    ]
    ];
    function weight($a, $b){
        if($a['weight']<$b['weight']) return 1;
        if($a['weight']==$b['weight']) return 0;
        if($a['weight']>$b['weight']) return -1;
    };
    uasort($arrLast, 'weight');
    print_r($arrLast)
?>
</pre>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Название</td>
            <td>Цвет</td>
            <td>Вес</td>
        </tr>
        <?php foreach($arrLast as $item):?>
            <tr>
                <td><?= $item['berry']?></td>
                <td><?= $item['color']?></td>
                <td><?= $item['weight']?></td>
            </tr>
        <?php endforeach?>
    </table>
</body>
</html>