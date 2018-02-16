<!Doctype html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>MEMENTIRA</title>
        <link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/FuentesGoogle.css">
        <link rel="stylesheet" href="css/misEstilos.css">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="index.php">MEMENTIRA</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="imagenes.php">MEMES</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="SubirDatos.php">APORTAR<span class="sr-only">(current)</span></a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
        </nav>
        <div class="container" style="width:100%;height:10px">
            
        </div>
        <div class="container">
            <form action="" id="formSubirDatos" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-lg-6">
                        
                        <div class="form-group">
                            <label for="">Titulo</label>
                            <input type="text" id="txtTitulo" class="form-control" name="titulo" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Tipo de imagen</label>
                            <select class="form-control" id="txtTipo" name="tipoimagen" required>  
                              <option value="imagen">jpg,png,jpeg</option>
                              <option value="gif">Gif</option>
                            </select>
                         </div>
                        
                         <div class="form-group">
                            <label for="">Seleccione la imagen</label>
                            <input type="file" id="txtArchivo" class="form-control-file" name="archivo" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Autor</label>
                            <input type="text" class="form-control" id="txtAutor" name="autor" required/>
                        </div>
                        
                        <div class="form-group">
                            <label for="">Nota</label>
                            <input type="text" class="form-control" id="txtNota" name="nota" required/>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" id="btnSubmit" class="btn btn-primary" name="submit" value="Submit"/>
                        </div>
                        
                    </div>
                </div>
            </form>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/Validaciones.js"></script>
        
        <div id="footer">
          
        Informacion de la pagina:<br>
                desarrolladores:<br>
                <a href="https://www.facebook.com/ri.chi.161" target="_blank" >@Ri chi</a><br>
                <a href="https://www.facebook.com/Randypj92"  target="_blank" >@Randy</a><br>
        </div>
        
    </body>
    
</html>

<?php
   //INCLUYENDO LA CONEXION A LA BASE DE DATOS
    require_once 'Conexion.php';
    
    //VERIFICANDO QUE EL SUBMIT SEA EXITOSO
    if (isset($_POST['submit'])) {
        $autor = filter_input(INPUT_POST, 'autor');
        $nota = filter_input(INPUT_POST, 'nota');
        $titulo = filter_input(INPUT_POST, 'titulo');
        $tipoimagen = filter_input(INPUT_POST, 'tipoimagen');
        $fecha = date("Y-m-d H:i:s");
        
        
        //OBTIENE EL TAMANIO DE LA IMAGEN
        if (getimagesize( $imagen = $_FILES['archivo']['tmp_name']) == FALSE) {
            echo "Seleccione una imagen.";
        }
        $imagen = addslashes($_FILES['archivo']['name']);
        $nombretmp = addslashes(file_get_contents($_FILES["archivo"]["tmp_name"]));
        $tipo = addslashes($_FILES['archivo']['type']);
        $query = "";
        $insertar = "";

        try{
            //TIPO DE IMAGEN A GUARDAR
            if ($tipoimagen == "imagen") {
            $arreglo = array("jpg","jpeg","png");
            $ext = pathinfo($imagen,PATHINFO_EXTENSION);
                if (in_array($ext, $arreglo)) {
                   $query = "INSERT INTO tblimagenes(imagen,titulo,fecha,autor,nota)values('$nombretmp','$titulo','$fecha','$autor','$nota','$tipoimagen')"; 
                }
                else{
                    echo '<script>alert("El tipo de imagen que intenta subir no es soportado.");</script>';
                }
            }
            else{
                $arreglo1 = array("gif","lol");
                $ext1 = pathinfo($imagen,PATHINFO_EXTENSION);
                if (in_array($ext1, $arreglo1)) {
                     $query = "INSERT INTO tblgif(gif,titulo,fecha,autor,nota)values('$nombretmp','$titulo','$fecha','$autor','$nota')";
                }
            }
            //INSERTANDO DATOS
            $insertar = mysqli_query($Conexion, $query);
        }
        catch (Exception $e)
        {
             echo "Error en la linea: " . $e->getLine();
        }
        //VERIFICANDO LA INSERCION DE DATOS
        if ($insertar) {
           echo "<script>alert('Datos guardados satisfactoriamente.');</script>";
        }else{echo "<script>alert('Error al intentar guardar los datos.');</script>" . mysqli_error($Conexion);}
}     
 

