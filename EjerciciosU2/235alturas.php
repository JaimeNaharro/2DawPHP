<?php
$personas=["Jaime"=>1.75,"Pepe"=>1.65,"lucas"=>1.45,"julio"=>1.45,"Pedro"=>1.95];
/*for($i=0;$i<5;$i++){
    $nombre=$_GET["nombre"];
    $altura=$_GET["altura"];
    $personas[$nombre]=$altura;
}
print_r($personas);*/

echo 
"<table>
    <style>
        table{
        border: 1px solid black;
        text-align: center;
        }
        td{
            border: 1px solid black;
            text-align: center;
        }
    </style>";
    $i=0;
    $alturaMed=0;
    while($i!=count($personas)){
        foreach($personas as $clave=>$valor){
            $alturaMed+=$valor;
            $i++;
            if($i==count($personas)){
                echo "<tr>
                        <td></td>
                        <td></td>
                        <td>".($alturaMed/count($personas))."</td>";
            }else{
                echo "<tr>
                        <td>".$clave."</td>
                        <td>".$valor. "</td>
                        <td></td></tr>";
                }
            }
        }   
echo "</table>"
?>