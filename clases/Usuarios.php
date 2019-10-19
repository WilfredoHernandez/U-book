<?php
class usuarios{
    public function registroUsuario($datos){
        $c=new conectar();
        $conexion=$c->conexion();

        $sel= "SELECT * FROM usuarios WHERE usuario='$datos[2]'";

        $ejecutar= mysqli_query ($conexion,$sel);

        $chequear_email = mysqli_num_rows($ejecutar);

        if ($chequear_email ==1 ){

            $exits= "User Already exists";
            exit();
        } else {

        $sql="INSERT into usuarios (nombre,
                            apellido,
                            usuario,
                            passwords)
                    values ('$datos[0]',
                            '$datos[1]',
                            '$datos[2]',
                            '$datos[3]')";
        return mysqli_query($conexion,$sql);

        }

    }
    
    public function loginUser($datos){
        $c=new conectar();
        $conexion=$c->conexion();
        $password=sha1($datos[1]);
        $sql="SELECT * from usuarios 
            where usuario='$datos[0]'
            and passwords='$password'";
        $result=mysqli_query($conexion,$sql);
        if(mysqli_num_rows($result) > 0){
            return 1;
        }else{
            return 0;
        }

}  
}

?>