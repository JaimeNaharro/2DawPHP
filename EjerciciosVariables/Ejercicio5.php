<?php
    if(isset($_GET['base'])&&isset($_GET['exp'])&&!empty($_GET['base'])&&!empty($_GET['exponente'])){
            $base=$_GET['base'];
            $exponente=$_GET['exponente'];
            if($exponente>0||$exponente<0){
                echo $base**$exponente;
            }else{
                echo 1;
            }
    }else{
        echo "No existen datos";
    }
?>