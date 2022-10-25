<?php
function prime($a){
$o=1;
for($i=2;$i<$a;$i++){
if($a%$i==0){
$o=0;
break;
}
}
return $o;
}
function mul($k){
for($j=2;$j<$k;$j++){
if((prime($j)==1 ) && ($k%$j==0)){
$q=$k/$j;
If(prime($q)==1){
break;
}
}
}
return array($q,$j);
}
$handle = fopen ("php://stdin","r");
$p = fgets($handle);
$loop=0;
while($loop<$p){
$k= fgets($handle);
echo mul($k). " ";
$loop++;}

?>