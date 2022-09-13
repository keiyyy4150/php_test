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
$array_member = [
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
echo '<pre>';

?>