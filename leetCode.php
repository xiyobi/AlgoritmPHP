<?php

#1346 - exam

//function checkIfExist($arr) {
//for ($i = 0; $i <= count($arr); $i++)
//{
//for ($j = $i+1; $j <= count($arr); $j++)
//{
//if (($arr[$i]==2*$arr[$j] || 2*$arr[$i] == $arr[$j] )and $j < count($arr))
//{
//return true;
//}
//}
//}
//return false;
//
//
//}

#507-exam

//class Solution {
//
//    /**
//     * @param Integer $num
//     * @return Boolean
//     */
//    function checkPerfectNumber($num) {
//        if($num <= 1)
//        {
//            return false;
//        }
//        $sum = 1;
//        $i = 2;
//        while($i < sqrt($num))
//        {
//            if ($num%$i == 0)
//            {
//                $sum  += $i;
//
//                if($i != $num/$i)
//                {
//                    $sum += $num/$i;
//                }
//            }
//
//            $i++;
//        }
//        return $sum==$num;
//    }
//}

;
#989 - exam
//class Solution {
//
//    /**
//     * @param Integer[] $num
//     * @param Integer $k
//     * @return Integer[]
//     */
//    function addToArrayForm($nums, $k) {
//        $s = "";
//        for ($i = 0; $i < count($nums); $i++) {
//            $s .= $nums[$i];
//        }
//        $num = (int)$s + $k;
//
//        $array = str_split((string)$num);
//        return  $array;
//    }
//}

//13-exam

//$s = 'III';
//$arr =  array(
//    'I'=>1,
//    'V'=>5,
//    'X'=>10,
//    'L'=>50,
//    'C'=>100,
//    'D'=>500,
//    'M'=>1000
//);
//$length = strlen($s);
//$result = 0;
//for($i=0;$i<$length;$i++){
//    $c = $arr[$s[$i]];
//    $n = $i+1<$length ? $arr[$s[$i]] : 0;
//    if ($c<$n){
//        $result -= $c;
//    }
//    else{
//        $result += $c;
//    }
//}
//return $result;
//
//




//class Solution {
//
//    /**
//     * @param String[] $s
//     * @return NULL
//     */
//    function reverseString(&$s) {
//        $arr = $s;
//        $length = count($s);
//        $s = [];
//        for ($i = $length-1; $i >= 0; $i--) {
//            array_push($s, $arr[$i]);
//
//        }
//
//    }
//
//}

