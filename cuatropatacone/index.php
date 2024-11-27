<?php
session_start();
if(isset($_POST['submit'])){
	
	 include('../php/login_admin.php');
	 $obj=new DbFunction();
	 $_SESSION['login']=$_POST['id'];
	 $obj->login($_POST['id'],$_POST['password']);
}
	 

?>
 








<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="stile3.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión - FOUR PATAS</title>
</head>
<body>
    <CEnter><h1>FOUR PATAS</h1></CEnter>

<link rel="stylesheet" href="stile3.css">

<form action="php/login_admin.php" method="post">
    <section class="login-form">
<!--

    <input type="text" required class="newUsername" name="loginid">
    <label class="cajas1">Email</label>




    <input type="password" required id="newPassword" name="password" class="letras2">
                <label class="cajas2">Contraseña</label>



                <input type="submit" class="btn" value="Iniciar">
-->
<label for="newUsername">Nombre de usuario:</label>
            <input type="text" id="newUsername" name="loginid" required><br><br>
            <label for="newPassword">Contraseña:</label>
            <input type="password" id="newPassword" name="password" required><br><br>
            <input type="submit" class="button" value="Iniciar"><br><br>
            <a href="menU.html">visualiza el menu</a>



        
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
    </section>
    </form>
</body>
</html>