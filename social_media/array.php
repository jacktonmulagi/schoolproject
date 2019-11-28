<?php
$a=array("eldoret","Dodoma","Nairobi","voi ","Meru");
$b=array("kisumu","mombasa","mogadishu","naivasha","molo");

$cities=array_merge($a,$b);
for($i=0;$i<count($cities);$i++)
{
echo $cities[$i];
//Return a JSON
$myJSON=json_encode("$i ");
echo$myJSON;
}

?>