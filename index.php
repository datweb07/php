<?php
echo 'hello', ' world', '!' . '<br>'; // sử dụng dấu phẩy để nối chuỗi
print 'dat' . '<br>';  // trả về 1
if (print 'dat' . '<br>') {
    echo 'in thành công' . '<br>';
}

$a = 3; // gắn giá trị cho biến a
$b = 5;
$result = $a + $b;
echo "Tổng của $a và $b là: " . ($result) . '<br>';

// hằng số
define('PI', 3.14);
echo PI . '<br>';

const pi = 3.14;
echo pi . '<br>';

$name = "Truong Thanh Dat";
echo "Xin chào $name" . '<br>'; // sử dụng nội suy
echo 'Xin chào ' . $name . '<br>'; // sử dụng nối chuỗi

// kiểu dữ liệu: số nguyên, số thực (float, double), chuỗi, boolean, mảng, NULL (là biến không có giá trị hợp lệ)
// số nguyên
$x = 99;
$y = -99;
$z = 2.4;
$h = true;
$s = "hello php";
var_dump($x);
var_dump($z);
var_dump($h);
var_dump($s);

// mảng
// có 3 mảng: mảng số chỉ mục (indexed array), mảng kết hợp (associative array), mảng đa chiều (multidimensional array)
$mang = ['a', 'b', 'c'];
var_dump($mang);

// in mảng
echo '<pre>';
print_r($mang);
echo '</pre>';

echo $mang[0] . '<br>';  // in phần tử đầu tiên của mảng


// toán tử số học
$i = 2;
$j = 3;
echo "Tổng của $i và $j là: " . ($i + $j) . '<br>';
echo "Hiệu của $i và $j là: " . ($i - $j) . '<br>';
echo "Tích của $i và $j là: " . ($i * $j) . '<br>';
echo "Thương của $i và $j là: " . ($i / $j) . '<br>';
echo "Chia lấy dư của $i và $j là: " . ($i % $j) . '<br>';
echo "Lũy thừa $i mũ $j là: " . ($i ** $j) . '<br>';  // 2^3


// toán tử gán
$k = 10;
$k += 5; 
$k -= 2;
$k *= 3;
$k /= 3;
$k %= 4;
echo $k . '<br>';


// toán tử so sánh
$m = 5;
$n = '5';
var_dump($m == $n); // true (so sánh giá trị)
var_dump($m === $n); // false (so sánh cả giá trị và kiểu dữ liệu)
var_dump($m != $n); // false (giá trị bằng nhau)
var_dump($m <> $n); // false (giá trị bằng nhau)
var_dump($m !== $n); // true (kiểu dữ liệu khác nhau)


// toán tử logic
$p = true;
$q = false;
var_dump($p && $q); // false
var_dump($p and $q); // false
var_dump($p || $q); // true
var_dump(!$p); // false
var_dump($p xor $q); // true


// toán tử tăng giảm
$r = 5;
echo $r++ . '<br>'; // in ra 5, sau đó r = 6
echo ++$r . '<br>'; // r = 7, in ra 7


// if else
$age = 20;
if ($age < 18) {
    echo 'Bạn chưa đủ tuổi trưởng thành' . '<br>';
} elseif ($age == 18) {
    echo 'Bạn vừa đủ tuổi trưởng thành' . '<br>';
} else {
    echo 'Bạn đã trưởng thành' . '<br>';
}


// toán tử ba ngôi
$score = 85;
$result = ($score >= 50) ? 'Đậu' : 'Rớt';
echo "Kết quả thi: $result" . '<br>';
?>