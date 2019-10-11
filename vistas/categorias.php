<?php
    session_start();
    if(isset($_SESSION['usuario'])){

    
?>


<!DOCTYPE html>
	<html>
	<head>
		<title>categorias</title>
		<?php require_once "menu.php"; ?>
	</head>
	<body>

		<div class="container">

        <br><br><br>
			<h1>Categorias</h1>
			<br>
			<div class="row">
				<div class="col-sm-4">
					<form id="frmCategorias">
						<label>Nueva Categoria</label>
						<input type="text" class="form-control input-sm" name="categ" id="categ">
						<p></p>
						<span class="btn btn-primary" id="btnAgregaCategoria">Agregar</span>
					</form>
				</div>
                <div class="col-sm-1"></div>
				<div class="col-sm-7">
					<div id="tablaCategoriasLoad"></div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="actualizaCategoria" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-sm" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Actualiza categorias</h4>
					</div>
					<div class="modal-body">
						<form id="frmCategoriaU">
							<input type="text" hidden="" id="idcategoria" name="idcategoria">
							<label>Categoria</label>
							<input type="text" id="categoriaU" name="categoriaU" class="form-control input-sm">
						</form>


					</div>
					<div class="modal-footer">
						<button type="button" id="btnActualizaCategoria" class="btn btn-warning" data-dismiss="modal">Guardar</button>

					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
			$('#btnAgregaCategoria').click(function(){
				vacios=validarFormVacio('frmCategorias');
				if(vacios > 0){
					alertify.alert("Debes llenar todos los campos!!");
					return false;
				}
			datos=$('#frmCategorias').serialize();
	        $.ajax({
			type:"POST",
			data:datos,
			url:"../procesos/categorias/agregaCategorias.php",
			success:function(r){
                if(r==1){
					$('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
					alertify.succes('Agregado correctamente');} 
					else{
                    alertify.error('Fallo al agregar');
                }
			}
		});
	});
    });
	</script>

<script type="text/javascript">
		$(document).ready(function(){
			$('#btnActualizaCategoria').click(function(){
				datos=$('#frmCategoriaU').serialize();
				$.ajax({
					type:"POST",
					data:datos,
					url:"../procesos/categorias/actualizaCategorias.php",
					success:function(r){
						if(r==1){
							alertify.success("Actualizado con exito");
							setTimeout(function(){
								$('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
									},5); 
						}else{
							alertify.error("no se pudo actualizar");
						}
					}
				});
			});
		});
	</script>

	<script type="text/javascript">
		function agregaDato(idCategoria,categoria){
			$('#idcategoria').val(idCategoria);
			$('#categoriaU').val(categoria);
		}
		function eliminaCategoria(idcategoria){
			alertify.confirm('¿Desea eliminar esta categoria?', function(){ 
				$.ajax({
					type:"POST",
					data:"idcategoria=" + idcategoria,
					url:"../procesos/categorias/eliminarCategoria.php",
					success:function(r){
						if(r==1){
							alertify.success("Eliminado con exito!");
							setTimeout(function(){
								$('#tablaCategoriasLoad').load("categorias/tablaCategorias.php");
									},5); 
							
						}else{
							alertify.error("No se pudo eliminar");
						}
					}
				});
			}, function(){ 
				alertify.error('Cancelado !')
			});
		}
	</script>
<?php


    } else{
        header("location:../index.php");
    }

    ?>