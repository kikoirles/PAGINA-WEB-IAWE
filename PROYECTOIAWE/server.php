<?php
    include_once('./funciones.php');

    //Conectar a la base de datos

    $conexion = conectarBD();

    
    //Consulta que queremos ejecutar en la base de datos.
    $query = "INSERT INTO users VALUES (?,?,?)";

    //Preparamos la consula almacenandola en la base de datos.
    $consultaPreparada = mysqli_prepare($conexion, $query);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password_1 = $_POST['password_1']; 

    //Ciframos la contraseña en texto plano que hemos recibido por HTTP con el método POST
    $password_cifrado = password_hash($password_1,PASSWORD_DEFAULT);

    //Sustituir los parametros de la consulta
    mysqli_stmt_bind_param($consultaPreparada,"sss",$username,$email,$password_cifrado);

    //Ejecución de la consulta
    if(mysqli_stmt_execute($consultaPreparada)>0){
        header("Location: ./pruebamenu.php");
    }else{
        header("Location: ./fallosesion.html");}
    

    //Creaccion de carpeta de usuario registrado
    if(!is_dir($username)) {
    if(!mkdir($username, 0777, true)) {
    die('Fallo al crear las carpetas...');
    }}

    