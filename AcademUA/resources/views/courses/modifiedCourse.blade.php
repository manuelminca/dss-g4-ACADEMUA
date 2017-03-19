@extends('master')
<body>





<ul>
<?php

$name = isset($_POST['name'])? $_POST['name']: '';

echo $name;

echo "hola";

?>
</ul>


</body>
</html>