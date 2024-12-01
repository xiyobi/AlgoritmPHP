<?php
//function isEmpty($str)
//{
//    if (empty($str)) {
//        echo true;
//    } else {
//        echo false;
//    }
//}
//
//isEmpty("");

//
//function summ (int $num1, int $num2)
//{
//    return $num1 + $num2;
//}
//summm(1, -2);
//
//function noll(int $num)
//{
//    if ($num <= 0) {
//        return true;
//    }
//    else{
//        return false;
//    }
//}

//
//function twoSum($nums, $target) {
//    $index = [];
//    for ($i = 0; $i < count($nums); $i++) {
//        for ($j = $i + 1; $j < count($nums); $j++) {
//            if ($nums[$i]+ $nums[$j] == $target) {
//                array_push($index, $j,$i);
//            }
//        }
//    }
//    return $index;
//}

//$arrays = array(1, 2, 7, 9);
//$abs = [];
//for ($i = 0; $i < count($arrays); $i++) {
//    $abs[] = abs($arrays[$i]);
//}
//rsort($abs);
//$length = count($abs);
//$n = [];
//$stop = 0;
//for ($i = 0; $i < $length; $i++) {
//    if($stop==3){
//        break;
//    }
//    else{
//        $n[]=$arrays[$i];
//    }
//    $stop++;
//}

#leetCode-744

//function nextGreatestLetter($letters, $target) {
//    $arr = 0;
//    $target = ord($target);
//    for ($i = 0; $i < count($letters); $i++) {
//        if (ord($letters[$i]) > $target) {
//            return ($letters[$i]);
//
//        }elseif (ord($letters[$i]) <= $target) {
//            $arr++;
//        }
//        if ($arr == count($letters)  ) {
//            return($letters[0]);
//        }
//    }
//}

#leetCode - 747
//
//$nums = [3,6,1,0];
//$max = max($nums);
//$index = array_search($max, $nums);
//foreach ($nums as $num){
//    if ($num != $max and $max < 2 * $num){
//        return -1;
//    }
//}
//return $index;
//

