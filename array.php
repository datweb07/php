<?php

// mảng chỉ mục, mảng kết hợp và mảng đa chiều
// mảng chỉ mục
$car_old = array('car1', 'car2');   // cách 1
echo $car_old[0] . '<br>';


$car_new = ['car1', 'car2'];    // cách 2
echo $car_new[0] . '<br>';


foreach ($car_new as $i){
    echo $i . ' ';
}
echo '<br>';

foreach ($car_new as $key => $value){
    echo $key . ' ' . '<br>';
}


// mảng kết hợp: key sẽ là chuỗi
$people = [
    'name' => 'dat, loc',
    'age' => '12, 13',
];

echo $people['name'] . '<br>';

foreach ($people as $key => $value){
    echo $key . ' ' . '<br>';
}



// mảng đa chiều
$brand = [
    'asus' => ['tuf', 'vivobook', 'zenbook'], 
    'apple' => ['macbook', 'iphone'], 
    'lenovo' => ['loq', 'legion'],
    ];
var_dump($brand['asus']);
echo '<br>';


var_dump($brand['asus'][0]);
echo '<br>';

foreach ($brand as $key => $value){
    var_dump($key);
}
echo '<br>';


foreach ($brand as $key => $value){
    echo "Hãng $key gồm: " . '<br>';
    foreach ($value as $i){
        echo $i . '<br>';
    }
}


/*
Hàm xử lý mảng
*/

$home = ['house1', 'house2'];
echo count($home) . '<br>';  // số lượng phần tử trong mảng


$h = 'house1';
var_dump(in_array($h, $home));  // kiếm tra $h có trong mảng $home không
echo '<br>';



foreach (array_keys($home) as $key){
    echo $key . ' ';
}
echo '<br>';


foreach (array_values($home) as $value){
    echo $value . ' ';
}
echo '<br>';


$num = [5, 1, 3, 4];
sort($num);     // tăng dần
// rsort($num);     // giảm dần
foreach ($num as $i){
    echo $i . ' ';
}

$push = ['hcm', 'hn'];
foreach ($push as $p){
    echo $p . ' ';
}
echo '<br>';

array_push($push, 'bp');    // push value vào cuối array

foreach ($push as $p){
    echo $p . ' ';
}
echo '<br>';

array_pop($push);       // pop value cuối array ra

foreach ($push as $p){
    echo $p . ' ';
}
echo '<br>';



$shift = ['pc', 'laptop'];
foreach ($shift as $s){
    echo $s . ' ';
}
echo '<br>';

array_unshift($shift, 'iphone');    // chèn vào phần tử đầu tiên trong mảng

foreach ($shift as $s){
    echo $s . ' ';
}
echo '<br>';

array_shift($shift);        // lấy đi phần tử đầu tiên

foreach ($shift as $s){
    echo $s . ' ';
}
echo '<br>';



$nums = [1,3,4, 5,6];

$res = array_filter($nums, function ($number) {         // lọc theo logic code trong function
    return $number % 2 == 0;
});

foreach ($res as $r){
    echo $r . ' ';
}
echo '<br>';


$uni = [1,1,1,2,3,];

$unique = array_unique($uni);       // lọc và bỏ đi các phần tử trùng lặp

foreach ($unique as $u){
    echo $u . ' ';
}
echo '<br>';


$male = ['I'];
$female = ['You'];

$mer = array_merge($male, $female);

for ($i = 0; $i < count($mer); $i++) {
    echo $mer[$i];
    if ($i < count($mer) - 1) {
        echo ' Love ';
    }
}
echo '<br>';    


$a = 'Toi yeu em';
var_dump($a);
echo '<br>';


$b = explode(' ', $a);      // tách string thành array
var_dump($b);
echo '<br>';

foreach ($b as $i){
    echo $i . ' ';
}
echo '<br>';



$c = ['Toi', 'thich', 'em'];
var_dump($c);
echo '<br>';


$d = implode(' ', $c);
var_dump($d);
echo '<br>';

echo $d . ' ';

?>