<?php
$nums=[];
$mayor=-1;
$menor=34;
$media=0;
for($i=0;$i<33;$i++){
    $nums[$i]=rand(0, 100);
    if($nums[$i]>$mayor){
        $mayor=$nums[$i];
    }
    if($nums[$i]<$menor){
        $menor=$nums[$i];
    }
    $media+=$nums[$i];
}


echo "El numero mas grande es: ". $mayor ."<br>";
echo "El numero mas pequeño es: ". $menor ."<br>";
echo "La media es: ". $media/33 ."<br>";

?>