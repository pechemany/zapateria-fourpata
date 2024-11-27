<?php

    include 'conexion.php';



    $loginid = $_POST['loginid'];
    $password =$_POST['password'];
   


    $query = "INSERT INTO tbl_login(loginid, password) 
              VALUES('$loginid','$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        
        <script>
        alert("usuario almacenado exitosamente");
        window.location= "../index.php";
        </script>
        
        
        
        ';
    }

?>