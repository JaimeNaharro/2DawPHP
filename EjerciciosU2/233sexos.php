<?php
$sex=[];
$sexos=['M'=>0,'F'=>0];
for($i=0;$i<100;$i++){
    $num=rand(1,2);
    if($num==1){
        $sex[]='M';
        $sexos['M']+=1;
    }else{
        $sex[]='F';
        $sexos['F']+=1;
    } 
}
print_r($sex);
echo "<br>";

print_r($sexos);
?>