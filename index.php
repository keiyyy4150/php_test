<?php 

// 配列の学習
// test2変更

/* // 配列１行
$array_1 = [1,2,3];

$array_2 = [
    ['赤','青','黄'],
    ['緑','紫','黒']
];

// echo $array[1];

echo '<pre>';
var_dump($array_2); // 配列の中身を全て見る
echo '<pre>';

echo $array_2[1][1]; */

// 連想配列
/* $array_member = [
    'name' => '本田',
    'height' => 170,
    'hobby' => 'サッカー'
];

echo $array_member['hobby'];

echo '<pre>';
var_dump($array_member);
echo '<pre>';

$array_member_2 = [
    '本田' => [
        'height' => 170,
        'hobby' => 'サッカー'
    ],
    '香川' => [
        'height' => 165,
        'hobby' => 'サッカー'
    ]
];

echo $array_member_2['香川']['height'];

echo '<pre>';
var_dump($array_member_2);
echo '<pre>';

$array_member_3 = [
    '1組' => [
        '本田' => [
            'height' => 170,
            'hobby' => 'サッカー'
        ],
        '香川' => [
            'height' => 165,
            'hobby' => 'サッカー'
        ],
    ],
    '2組' => [
        '長友' => [
            'height' => 160,
            'hobby' => 'サッカー'
        ],
        '乾' => [
            'height' => 168,
            'hobby' => 'サッカー'
        ],
    ]
];

echo $array_member_3['2組']['長友']['height'];

echo '<pre>';
var_dump($array_member_3);
echo '<pre>'; */

// 比較演算子の学習

/* $test_1 = 7;
$test_2 = 3;

$test_3 = $test_1 / $test_2;



echo $test_3; */

// 条件分岐の学習

/* $height = 90;

if ($height === 91) {
  echo '身長は' . $height . 'cmです';
} else {
  echo '身長は' .$height . 'cmではありません';
} */

$signal = 'blue';

if ($signal === 'red') {
    echo 'とまれ';
} else if ($signal === 'yellow') {
    echo '一旦停止';
} else { // elseはあまり使用しないほうがいい
    echo '進む';
}

echo '<br>';

$speed = 80;

if ($signal === 'blue') {
    if ($speed >= 80) { // if文の中にif文　ネスト　※見づらいのであまり使用しないほうがいい
        echo 'スピード違反';
    }
} 

?>