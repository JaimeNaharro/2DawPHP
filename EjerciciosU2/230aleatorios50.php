<?php
$nums=[];
for($i=0;$i<50;$i++){
    $nums[$i]=rand(0, 99);
    //No hace falta poner el $i porque ya lo pone al final.
}
echo "<ul>";
for($j=0;$j<count($nums);$j++){
    echo "<li> $nums[$j] </li>";
}
echo "</ul>";

?>