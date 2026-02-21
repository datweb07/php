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
?>