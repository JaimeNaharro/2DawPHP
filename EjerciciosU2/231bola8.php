<?php
$resp=[ "Si", "no", "quizás", "claro que sí", "por supuesto que no", "no lo tengo claro","seguro", "yo diría que sí", "ni de coña"];
$num=rand(0,count($resp)-1);
echo $resp[$num];
?>