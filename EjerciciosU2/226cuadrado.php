<?php echo"
<style>
table{
border: 1px solid black;
text-align: center;
}
td{
border: 1px solid black;
text-align: center;
}
border
</style>";
        echo "<table>";
        $filas=$_GET['filas'];
        $columnas=$_GET['columnas'];
        for($i=0;$i<$filas;$i++){
            
            echo "<tr>";
            for($j=0;$j<$columnas;$j++){
                if($i==0||$j==0||$i==$filas-1||$j==$columnas-1){
                echo "<td>",$i,",",$j,"</td>";
            }else{
                echo "<td></td>";
            }
            }
            echo "</tr>";
        }        
        
    echo "</table>";
    ?>