<?php

/* Mảng, chuỗi dùng cho tất cả các bài
$array = [5, 10, 2, 26, 100]; 
$string = "Nguyen Kim Anh"; */


//1. ktr chẵn lẻ
function checkEvenNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn" ."<br>";
    } else {
        echo "Số $number không phải là số chẵn" ."<br>";
    }
}
checkEvenNumber(10);

//2. tính tổng của các số từ 1 đến n.
function calculateSum($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 5;
$sum = calculateSum($n);
echo "Tổng của các số từ 1 đến $n là: $sum" ."<br>";

//3. in ra bảng cửu chương từ 1 đến 10.
function printMultiplicationTable() {
    for ($i = 1; $i <= 3; $i++) {
        echo "Bảng cửu chương $i:<br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result<br>";
        }
        echo "<br>";
    }
}
printMultiplicationTable();

//4. Viết chương trình PHP để kiểm tra xem một chuỗi có chứa một từ cụ thể hay không.
$string = 'Nguyen Kim Anh';
$word = 'Kim';
function checkString($string, $word) {
    $check = strstr($string, $word);
    if ($check !== false) {
        return "Chuỗi '$string' chứa từ '$word'" ."<br>";
    } else {
        return "Chuỗi '$string' không chứa từ '$word'" ."<br>";
    }
}
echo checkString($string, $word);

//5 Viết chương trình PHP để tìm giá trị lớn nhất và nhỏ nhất trong một mảng.
$array = [5, 10, 2, 26, 100];
function findMinMaxValue($array) {
    $min = $array[0];
    $max = $array[0];
  
    foreach ($array as $value) {
        if ($value < $min) {
            $min = $value;
        }
        if ($value > $max) {
            $max = $value;
        }
    }
  
    echo "Giá trị nhỏ nhất trong mảng là: $min<br>";
    echo "Giá trị lớn nhất trong mảng là: $max";
}
findMinMaxValue($array);

//6. Viết chương trình PHP để sắp xếp một mảng theo thứ tự tăng dần.
echo "<br>";
function sortArrayAscending($array) {
    $n = count($array);
  
    for ($i = 0; $i < $n - 1; $i++) {
      for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
          $temp = $array[$j];
          $array[$j] = $array[$j + 1];
          $array[$j + 1] = $temp;
        }
      }
    }
    return $array;
}
$sortedArray = sortArrayAscending($array);
echo "Mảng đã sắp xếp: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}


//7. Viết chương trình PHP để tính giai thừa của một số nguyên dương.
echo "<br>";
$number = 8;
function calculateFactorial($number) {
    if ($number < 0) {
        return "Không thể tính giai thừa cho số âm.";
    } else if ($number == 0) {
        return "Giai thừa của 0 là 1.";
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return "Giai thừa của $number là: $factorial";
    }
}
echo calculateFactorial($number);


//8 Viết chương trình PHP để tìm số nguyên tố trong một khoảng cho trước.
echo "<br>";
$start = 3;
$end = 22;
function isPrimeNumber($number) {
    if ($number < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function findPrimeNumbers($start, $end) {
    echo "Các số nguyên tố trong khoảng từ $start đến $end là: ";
    for ($i = $start; $i <= $end; $i++) {
        if (isPrimeNumber($i)) {
            echo $i . " ";
        }
    }
}
$primeNumbers = findPrimeNumbers($start, $end);

//9 Viết chương trình PHP để tính tổng của các số trong một mảng.
echo "<br><br>";
function calculateSumInArray($array) {
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number;
    }
    return $sum;
}
$sum = calculateSumInArray($array);
echo "Tổng của các số trong mảng là: $sum";


//10 Viết chương trình PHP để in ra các số Fibonacci trong một khoảng cho trước.
echo "<br>";
function fibonacci($n)
{
    $fibonacciArray = array(0, 1); // Mảng ban đầu chứa 2 số Fibonacci đầu tiên

    for ($i = 2; $i < $n; $i++) {
        $fibonacciArray[$i] = $fibonacciArray[$i - 1] + $fibonacciArray[$i - 2];
    }

    return $fibonacciArray;
}

$start = 0;
$end = 100;
function printFibonacciInRange($start, $end)
{
    $fibonacciArray = fibonacci($end); // Tính tất cả các số Fibonacci cho đến số Fibonacci thứ $end

    foreach ($fibonacciArray as $fibonacci) {
        if ($fibonacci >= $start && $fibonacci <= $end) {
            echo $fibonacci . " ";
        }
    }
}
echo "Các số Fibonacci trong khoảng từ $start đến $end là: ";
printFibonacciInRange($start, $end);


echo "<br>";
//11: Viết chương trình PHP để kiểm tra xem một số có phải là số Armstrong hay không.
$number = 153; 
function armstrong($number){
    $sum = 0;
    $temp = $number;
    $number1 = strlen($number);

    while ($temp!= 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $number1);
        $temp = (int)($temp/ 10);
    }
    if ($number == $sum) {
        return true;
    } else {
        return false;
    }
}
$number = 1111;
if (armstrong($number)) {
    echo $number . " là số Armstrong.";
   } 
else {
   echo $number . " không là số Armstrong.";
   }
echo "<br>";


//12 Viết chương trình PHP để chèn một phần tử vào một mảng ở vị trí bất kỳ.
echo "<br>";
function insertElement2($array, $element, $position) {
    $result = [];
    $length = count($array);
    
    if ($position < 0) {
        $position = 0;
    } elseif ($position > $length) {
        $position = $length;
    }
    
    for ($i = 0; $i < $length + 1; $i++) {
        if ($i == $position) {
            $result[] = $element;
        }
        if ($i < $length) {
            $result[] = $array[$i];
        }
    }
    
    return $result;
}
$element = 10; 
$position = 2; 
$resultArray = insertElement2($array, $element, $position);
print_r($resultArray);


echo "<br>";
//13Viết chương trình PHP để loại bỏ các phần tử trùng lặp trong một mảng.
function removeDuplicates($arr)
{
    $result = array();

    foreach ($arr as $element) {
        $isDuplicate = false;
        
        foreach ($result as $resElement) {
            if ($element === $resElement) {
                $isDuplicate = true;
                break;
            }
        }
        
        if (!$isDuplicate) {
            $result[] = $element;
        }
    }
    return $result;
}
$arr = array(1, 2, 5, 2, 4, 1, 5, 3);
$uniqueArray = removeDuplicates($arr);
print_r($uniqueArray);

echo "<br>";
//14: Viết chương trình PHP để tìm vị trí của một phần tử trong một mảng.
$element = 3;
function findElementPosition1($array, $element)
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === $element) {
            return $i;
        }
    }

    return -1; 
}
$position = findElementPosition1($array, $element);
echo "Vị trí của phần tử $element là $position";


echo "<br>";
//15 Viết chương trình PHP để đảo ngược một chuỗi.
$length = strlen($string);
$reversedString = "";
for ($i = $length - 1; $i >= 0; $i--) {
    $reversedString .= $string[$i];
}
echo $reversedString;

echo "<br>";
//16Viết chương trình PHP để tính số lượng phần tử trong một mảng.
function countElements1($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }return $count;
 }
echo "Số lượng phần tử trong mảng: " .countElements1($array). '<br>';
echo "<br>" ;

//17 Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không.
function checkPalindrome($str) {
    $str = strtolower(str_replace(' ', '', $str));
    if ($str == strrev($str)) { 
        echo "Chuỗi '".$str."' là chuỗi Palindrome";
    } else {
        echo "Chuỗi '".$str."' không phải là chuỗi Palindrome";
    }
}
checkPalindrome("Hello"); 


echo "<br>";
//18 Viết chương trình PHP để đếm số lần xuất hiện của một phần tử trong một mảng.
$element = 1;
$count = 0;
foreach ($arr as $value) {
    if ($value == $element) {
        $count++;
    }
}
echo "Số lần xuất hiện của phần tử $element trong mảng là: $count";


echo "<br>";
//19: Viết chương trình PHP để sắp xếp một mảng theo thứ tự giảm dần.
function sortDescending($array)
{
    $n = count($array);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = $i + 1; $j < $n; $j++) {
            if ($array[$i] < $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}
$sortedArray = sortDescending($array);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
print_r($sortedArray);

echo "<br>";
//20: Viết chương trình PHP để thêm một phần tử vào đầu hoặc cuối của một mảng.
$newElement = 12;
$newArray = [$newElement];
foreach ($array as $element) {
    $newArray[] = $element;
}
$array = $newArray;
print_r($array);

//Thêm vào cuối mảng
$newElement = 7;
$newArray = [];
foreach ($array as $element) {
    $newArray[] = $element;
}
$newArray[] = $newElement;
$array = $newArray;
print_r($array);

//21Viết chương trình PHP để tìm số lớn thứ hai trong một mảng.
echo "<br>";
function findSecondLargest($array) {
    $max = $array[0]; 
        $secondMax = null; 
        foreach ($array as $num) {
            if ($num > $max) {
                $secondMax = $max;  
                $max = $num; 
            } elseif ($num != $max && ($secondMax === null || $num > $secondMax)) {
                $secondMax = $num;
            }
        }
        echo "Số lớn thứ hai trong mảng là: $secondMax" ."<br>";
    }
findSecondLargest($array);

//22: Viết chương trình PHP để tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương.
function findGCD($a, $b) {
    while ($b != 0) {
        $a %= $b;
        [$a, $b] = [$b, $a];
    }
    return $a;
}

function findLCM($a, $b) {
    return ($a * $b) / findGCD($a, $b);
}

$num1 = 24;
$num2 = 36;

$gcd = findGCD($num1, $num2);

// Tìm bội số chung nhỏ nhất (BSCNN)
$lcm = findLCM($num1, $num2);

// In kết quả
echo "Ước số chung lớn nhất của $num1 và $num2 là: $gcd" . PHP_EOL;
echo "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: $lcm" . PHP_EOL;


echo "<br>";
//23 Viết chương trình PHP để kiểm tra xem một số có phải là số hoàn hảo hay không.
$number = 28;
function isPerfectNumber($number) {
    if ($number <= 0) {
        return false;
    }

    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }

    return $sum == $number;
}
if (isPerfectNumber($number)) {
    echo "Số $number là số hoàn hảo" ."<br>";
} else {
    echo "Số $number không phải là số hoàn hảo" ."<br>";
}


//24: Viết chương trình PHP để tìm số lẻ lớn nhất trong một mảng.
function findLargestOddNumber($array) {
    $largestOddNumber = null;
    foreach ($array as $number) {
        if ($number % 2 != 0) {
            if ($largestOddNumber === null || $number > $largestOddNumber) {
                $largestOddNumber = $number;
            }
        }
    }
    return $largestOddNumber;
}
$result = findLargestOddNumber($array);
if ($result !== null) {
    echo "Số lẻ lớn nhất trong mảng là: $result" ."<br>";
} else {
    echo "Không có số lẻ nào trong mảng" ."<br>";
}


echo "<br>";
//25: Viết chương trình PHP để kiểm tra xem một số có phải là số nguyên tố hay không.
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }

    return true;
}

$number = 17;

if (isPrime($number)) {
    echo "$number là số nguyên tố" ."<br>";
} else {
    echo "$number không là số nguyên tố" ."<br>";
}

//26 Viết chương trình PHP để tìm số dương lớn nhất trong một mảng.
function findLargestPositiveNumber($array) {
    $largestPositiveNumber = null;

    foreach ($array as $number) {
        if ($number > 0 && ($largestPositiveNumber === null || $number > $largestPositiveNumber)) {
            $largestPositiveNumber = $number;
        }
    }

    return $largestPositiveNumber;
}
$result = findLargestPositiveNumber($array);

if ($result !== null) {
    echo "Số dương lớn nhất trong mảng là: $result" ."<br>";
} else {
    echo "Không có số dương nào trong mảng" ."<br>";
}


//27: Viết chương trình PHP để tìm số âm lớn nhất trong một mảng.
function findLargestNegativeNumber($array) {
    $largestNegativeNumber = null;
    foreach ($array as $number) {
        if ($number < 0 && ($largestNegativeNumber === null || $number > $largestNegativeNumber)) {
            $largestNegativeNumber = $number;
        }
    }

    return $largestNegativeNumber;
}
$result = findLargestNegativeNumber($array);
if ($result !== null) {
    echo "Số âm lớn nhất trong mảng là: $result" ."<br>";
} else {
    echo "Không có số âm nào trong mảng". "<br>";
}

//28: Viết chương trình PHP để tính tổng các số lẻ từ 1 đến n.
$n = 10; 
function sumOfOddNumbers($n) {
    $sum = 0;
    if ($n % 2 === 0) {
        $n--; 
    }
    for ($i = 1; $i <= $n; $i += 2) {
        $sum += $i;
    }
    return $sum;
}
if ($n < 1) {
    echo "Vui lòng nhập một số nguyên dương lớn hơn 0" ."<br>";
} else {
    $result = sumOfOddNumbers($n);
    echo "Tổng các số lẻ từ 1 đến $n là: $result" ."<br>";
}

echo "<br>";
//29: Viết chương trình PHP để tìm số chính phương trong một khoảng cho trước.
$start = 1; 
$end = 100; 
function findPerfectSquares($start, $end) {
    $perfectSquares = []; //là một mảng rỗng trong PHP. Mảng này được sử dụng để lưu trữ các số chính phương tìm thấy trong khoảng đã cho.
    for ($i = $start; $i <= $end; $i++) {
        $sqrt = sqrt($i);
        // Kiểm tra xem bình phương của căn bậc hai có bằng số gốc hay không
        if ($sqrt == (int)$sqrt) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$result = findPerfectSquares($start, $end);
echo "Các số chính phương trong khoảng từ $start đến $end là: " ."<br>";
foreach ($result as $number) {
    echo $number . " ";
}


//30: Viết chương trình PHP để kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không.
$substring = "Anh";
function isSubstring1($string, $substring)
{
    $stringLength = 0;
    $substringLength = 0;
    while (isset($string[$stringLength])) {
        $stringLength++;
    }
    while (isset($substring[$substringLength])) {
        $substringLength++;
    }
    if ($substringLength > $stringLength) {
        return false;
    }
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $isMatch = true;

        for ($j = 0; $j < $substringLength; $j++) {
            if ($string[$i + $j] !== $substring[$j]) {
                $isMatch = false;
                break;
            }
        }
        if ($isMatch) {
            return true;
        }
    }
    return false;
}
$isSubstring = isSubstring1($string, $substring);
if ($isSubstring) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
} else {
    echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'";
}

?>