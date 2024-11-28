<?php
//$n = 5;
//$m = array(1,2,3,1,4,5,6);
//
//if($n%2==0){
//    echo "Quyudagi son $n juft";
//}
//else{
//    echo "Quyudagi son $n juft emas";
//}

//$i = 1;
//while (0 < $n) {
//        $i*=$n;
//        $n--;
//}
//echo $i;

//if($n>0){
//    echo "kiritilgan son $n Musbat";
//}
//else{
//    echo "kiritilgan son $n Musbat esmas";
//}
//$max = $m[0];
//foreach ($m as $v) {
//    if ($max < $v){
//        $max = $v;
//    }
//}
//echo $max;

//$n = 2;
//$m = 5;
//$r = 1;
//while(0<$n){
//    $r *= $m;
//    $n--;
//}
//echo $r;
//

//$m = array(1,2,3,4,5,6);
//$a = array_reverse($m);
//print_r($a);


//$k = array(5,6,7,8,9);
//$e= array(1,2,3,4);
//
//print_r (array_merge($k,$e));

$g = 158;

while(1){
    $cum = (str_split($g));
    $sum = (array_sum($cum));
    if($sum < 10){
        print_r($sum);
        break;
    }
    $g = $sum;
}

//$unli = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
//$soz = "salomQalaysan";
//$natija = 0;
//
//foreach (str_split($soz) as $un) {
//    if (in_array($un, $unli)) {
//        $natija += 1;
//    }
//}
//print_r($natija);
