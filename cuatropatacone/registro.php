<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="stile4.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registro - fourpatas</title>
</head>
<body>
<form action="php/registro_usuario_be.php" method="POST">
        <h2>Crear una nueva cuenta</h2>
              
     <!--
        <input class="controls"type="email"  id="confirmPassword" name="loginid"  placeholder="ingresa correo">
        <input class="controls"type="text" id="newUsername" name="password"  placeholder="ingresa contraseña">
        <input class="boton" type="submit" value="registrar">
        
        
        
        -->
        
       
            <label for="newUsername">Nombre de usuario:</label>
            <input type="text" id="newUsername" name="loginid" required><br><br>
            <label for="newPassword">Contraseña:</label>
            <input type="password" id="newPassword" name="password" required><br><br>
            <input class="boton" type="submit" value="registrar">

        </form>
        
       
    
    </section>
    </html>