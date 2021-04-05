<?php

if(isset($_get["name"]))
{
   $var=$_get["name"];
    
}
else {
 $var=4;}

$v1="<html>
<head>
</head>
<body>
<form action='http://localhost/hii/index.php' method='get'>
<input type='text' name='name'></input><br>
<input type='submit'  name='submit' value='submit'>
</input>

</forms>
</body>
</html>"
;


echo $var;
echo $v1;


?>