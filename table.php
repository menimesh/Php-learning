<?php
$fp=fopen("employee.csv","r");
echo"<table border='1'>";
for($row=fgetcsv($fp);!feof($fp);$row=fgetcsv($fp)){
    echo"<tr>";
    for($i=0;$i<3;$i++)
    {
        echo"<td>$row[$i]</td>";

    }
    echo"</tr>";
}
echo"</table>";
?>
