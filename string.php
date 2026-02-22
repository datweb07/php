<?php
$a = 'I love';
$b = ' You';
$c = $a . $b;
echo $c . '<br>';


$length = strlen($c);   // lấy độ dài của chuối
echo $length . '<br>';


$word = str_word_count($c);     // đếm số từ
echo $word . '<br>';


$rev = strrev($c);      // đảo ngược chuỗi
echo $rev . '<br>';


$pos = strpos($c, 'You');     // trả về vị trí index của ký tự trong chuỗi
echo $pos . '<br>';


$rep = str_replace('You', 'Dat', $c);       // thay thế ký tự trong chuỗi
echo $rep . '<br>';


$sub = substr($c, 2, $length - 1);      // cắt chuỗi con
echo $sub . '<br>';


$love = 'I LOVE YOU';
$lower = strtolower($love);         // viết thường
echo $lower . '<br>';

$upper = strtoupper($lower);        // viết hoa
echo $upper . '<br>';



$ucf = ucfirst($lower);         // viết hoa chữ cái đầu trong chuỗi
echo $ucf . '<br>';



$ucw = ucwords($lower);         // viết hoa chữ cái đầu của mỗi từ sau khoảng trắng (i love you --> I Love You)
echo $ucw . '<br>';


$space = '   dat    ';
echo strlen($space) . '<br>';
$trim = trim($space);                   // xóa đi khoảng trắng ở hai đầu của chuỗi
echo strlen($trim) . '<br>';



$ltrim = ltrim($space);
echo strlen($ltrim) . '<br>';           // xóa khoảng trắng trước


$rtrim = rtrim($space);                 // xóa khoảng trắng sau
echo strlen($rtrim) . '<br>';




$h = 'I LOVE YOU';
$j = 'i love you';
$casecmp = strcasecmp($h, $j);          // so sánh hai chuỗi (không phân biệt chữ hoa, chữ thường)
$cmp = strcmp($h, $j);                  // so sánh hai chuỗi (có phân biệt chữ hoa, chữ thường)
echo $casecmp . '<br>';
echo $cmp . '<br>';


 // mã hóa chuỗi
$encrypt = 'toi yeu ban';

$md5 = md5($encrypt);       
echo 'md5: ' . $md5 . '<br>';

$sha1 = sha1($encrypt);       
echo 'sha1: ' . $sha1 . '<br>';

$encode = base64_encode($encrypt);          // encode: mã hóa
echo 'encode: ' . $encode . '<br>';

$decode = base64_decode($encode);           // decode: giải mã
echo 'decode: ' . $decode . '<br>';
?>  