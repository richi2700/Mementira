<!Doctype html>
<html>
    <head>
        <title>MEMENTIRA</title>
        <link href="https://fonts.googleapis.com/css?family=Nova+Flat" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="css/misEstilos.css">
        <link rel="stylesheet" href="css/FuentesGoogle.css">
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
<!--            <li class="nav-item">s
                  <a class="nav-link" href="SubirDatos.php">APORTAR<span class="sr-only">(current)</span></a>
                </li>-->
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
              </form>
            </div>
          </nav>
         <div class="container" style="width:100%;height: 50px">
            
        </div>
          <div class="container">
            <table> 
                   <?php
                    include 'Conexion.php';
                    $empezar_desde = 0;
                    $por_pagina = 10;
                    $querylimit = "SELECT * FROM tblimagenes ORDER BY ID desc LIMIT $empezar_desde,$por_pagina";
                    $resultadolimit = mysqli_query($Conexion,$querylimit);
                    $row = array();
                    echo "<table>";
                        while ($row = mysqli_fetch_array($resultadolimit)) 
                        {
                           echo '<tr> 
                                 <td>';
                           echo '<div class="gallery">';
                           echo '<div class="desc" id= "titulo">' . $row['titulo'] . '</div>';
                           echo '<a href="data:image;base64,'.base64_encode($row['imagen']).'" target="_blank">';
                           echo '<img class="img-fluid img-thumbnail rounded" src="data:image;base64,'.base64_encode($row['imagen']).'">';
                           echo '</a>';
                           echo "<div id = 'autor' class='caption'>" . "Autor: " . $row['autor'] ."</div>";
                           echo '</div>';
                           echo "<br>";
                           echo '</td>
                               <td>
                               </td>
                                </tr>';
                        }
                    echo "</table>";
                    ?>
        </table> 
          </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/Validaciones.js"></script>
    </body>
    <div id="footer">
      Informacion de la pagina:<br>
      desarrolladores:<br>
      <a href="https://www.facebook.com/ri.chi.161">@Ri chi</a><br>
      <a href="https://www.facebook.com/Randypj92">@Randy</a><br>
  </div>
    
</html>