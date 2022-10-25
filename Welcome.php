<?php

    function subseq($str,$text){
        $it=0;
$str=implode($str);
      $text=implode($text);
        $nt=strlen($text);
        $ns=strlen($str);
        $arr=array_fill(0,$ns,0);
        while($it<$nt){
            $is=0;
            while($is<$ns){
                if($str[$is]==$text[$it]){
                if($is==0){
                $kk=$arr[$is];
                $kk++;
                $arr[$is]=$kk;
                
                }
                else{
                   $kk=$arr[$is];
                   $ff=$arr[$is-1];
                   $kk=$kk+$ff;
                   $arr[$is]=$kk;
                }
                   $is++;
                }
                else{
                    $is++;
                }
            }
            $it++;
        }
        print $arr[$ns-1];
    }
    function remove($str,$text){
            while($str[0]!= $text[0]){
        array_splice($text, 0, 1);  
        }
        return $text;
        }
$handle = fopen ("php://stdin","r");
$p = fgets($handle);
$loop=0;
while($loop<$p){
$str = fgets($handle);
$text = fgets($handle);
        $text=str_split($text);
        $str=str_split($str);
        $text=remove($str,$text);
        print subseq($str,$text) . "\n";
$loop++;}
?>