<?php 
	class libros{

        public function actualizaLibro($datos){
            $c= new conectar();
            $conexion=$c->conexion();
    
            $sql="UPDATE books set disponible='$datos[1]'
                                    where id_libro='$datos[0]'";
    
        return mysqli_query($conexion,$sql);
    
    }

}

class librosDevueltos{

    public function regresaLibros($datos){
        $c= new conectar();
        $conexion=$c->conexion();

        $sql="UPDATE books set disponible='$datos[1]'
                                where id_libro='$datos[0]'";

    return mysqli_query($conexion,$sql);

}

}

?>