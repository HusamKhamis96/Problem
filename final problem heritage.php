<?php
     function solveMeFirst($p,$n,$r,$c,$arr){
    $col=array();
    $row=array();
    $count=0;
      for($i=0;$i<$r;$i++){
     for($j=0;$j<$c;$j++){
 if($arr[$i][$j] === '+'){
   $row[$count]=$i;
   $col[$count]=$j;
     $count++;

}}}
sort($col);
$zr=count($row);
$zc=count($col);
return [$count,$row,$col];
 }
$handle = fopen ("php://stdin","r");
$p = fgets($handle);
$loop=0;
while($loop<$p){
$n = fgets($handle);
$r = fgets($handle);
$c = fgets($handle);
$mo=0;
$ro=0;
while(! feof($handle) && $ro<$r)
  {
 
$a=fgets($handle);
  $mm=strlen($a);      
  for($mn=0;$mn<$mm;$mn++){
$arr[$mo][$mn]=$a[$mn];

}
$ro++;
$mo++;
 
  }
$sum = solveMeFirst($p,$n,$r,$c,$arr);
$scount=$sum[0];
$sdiv=$scount/2;
$srow=$sum[1];
$scol=$sum[2];
print (solve($n,$scount,$srow,$scol) . "
");
$loop++;}
function solve($n,$scount,$srow,$scol){
 
$sdiv=$scount/2;
$n=(int)$n;
$group=$scount/$n;
 
    if($scount%$n!=0){
        return "IMPOSIBLE";
    }
    else{
     if(($srow[$sdiv]!=$srow[$sdiv-1]) && ($scol
[$sdiv] != $scol[$sdiv-1])){

 $fcol=$scol[$sdiv-1];
         $fcol++;
         $frow=$srow[$sdiv-1];


         $frow++;
         $result=$fcol . " " . $frow;
  return result;
}
 elseif($srow[$sdiv]!=$srow[$sdiv-1]){

      $ll=$group-1;
      while($ll< $scount-1){
          $res=$srow[$ll];
          $res++;
          if($ll==$group-1){
              $result=$res;
          }

else{
              $result= $result . "," . $res;
          }
          $ll+=$group;
      } 
      $result=$result . " " . "-";
      return $result;
     }
     else{
      $ll=$group-1;
      while($ll< $scount-1){
          $res=$scol[$ll];
          $res++;
          if($ll==$group-1){
              $result=$res;
          }
          else{
              $result= $result . "," . $res;
}
  $ll+=$group;
      } 
$result=$result . " " . "-";
return $result;
     }
 
 
    }
}
fclose($handle);
?>