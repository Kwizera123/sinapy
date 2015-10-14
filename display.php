<?php

//connectiom
$sinapy=mysql_connect("localhost", "root", "");
mysql_select_db("identity", $sinapy);

// select into our table
$school = mysql_query("select * from contact");
$check = mysql_fetch_array($school);
echo "<h1 align >thanks for visiting our database:</h1>";
echo'

<tr>
<td>'.$check [fname].'</td>
<td>'.$check [sname].'</td>
</tr>';


?>