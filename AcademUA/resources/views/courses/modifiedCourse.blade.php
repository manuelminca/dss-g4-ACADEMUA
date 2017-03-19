@extends('master')
<body>



Hola <?php echo htmlspecialchars($_POST['nombre']); ?>.
Usted tiene <?php echo (int)$_POST['edad']; ?> años.

<ul>
<?php




?>
</ul>


</body>
</html>