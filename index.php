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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark menuTop">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="index.php">MEMENTIRA</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
               <li class="nav-item">
                    <a class="nav-link" href="Gif.php">Gif</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search" name="buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
                
              </form>
            </div>
          </nav>
        <div class="container" style="width:100%;height: 50px">
            
        </div>
        
      <div class="container align-items-center" id = "mainColum">      
                        <?php
                           
                         if(!empty($_GET))
                         {
                             $busqueda = $_GET["buscar"];
                            include 'Conexion.php';
                            $por_pagina = 6;
                            $pagina = 1;

                            if (isset($_GET['pagina']))
                            {
                                $pagina = $_GET['pagina'];
                            }

                            else
                            {
                                 $pagina = 1;
                            }

                             $empezar_desde = ($pagina-1) * $por_pagina;
                             $query = "SELECT * FROM tblimagenes WHERE titulo = #'$busqueda'#";
                             $resultadolimit = mysqli_query($Conexion,$query);
                             $row = array();
                             
                             while ($row = mysqli_fetch_assoc($resultadolimit)) 
                             {
                                echo '<div class="gallery">';
                                echo '<div class="desc" id= "titulo">' . $row['titulo'] . '</div>';
                                echo '<a target="_blank"  href="data:image;base64,'.base64_encode($row['imagen']).'">';
                                echo '<img class="img-fluid img-thumbnail rounded" src="data:image;base64,'.base64_encode($row['imagen']).'">';
                                echo '</a>';
                                echo "<div id = 'autor' class='caption'>" . "Autor: " . $row['autor'] ."</div>";
                                echo '</div>';
                            }
                         
                        }
                        else
                        {
                            include 'Conexion.php';
                            $por_pagina = 6;
                            $pagina = 1;

                            if (isset($_GET['pagina']))
                            {
                                $pagina = $_GET['pagina'];
                            }
                            else
                            {
                                $pagina = 1;
                            }
                            
                            $empezar_desde = ($pagina-1) * $por_pagina;
                           $querylimit = "SELECT * FROM tblimagenes LIMIT $empezar_desde,$por_pagina";
                            $resultadolimit = mysqli_query($Conexion,$querylimit);
                            $row = array();
                            while ($row = mysqli_fetch_assoc($resultadolimit)) 
                            {
                                echo '<div class="gallery">';
                                echo '<div class="desc" id= "titulo">' . $row['titulo'] . '</div>';
                                echo '<a target="_blank"  href="data:image;base64,'.base64_encode($row['imagen']).'">';
                                echo '<img class="img-fluid img-thumbnail rounded" src="data:image;base64,'.base64_encode($row['imagen']).'">';
                                echo '</a>';
                                echo "<div id = 'autor' class='caption'>" . "Autor: " . $row['autor'] ."</div>";
                                echo '</div>';
                            }
                        }
                         ?>
          <div id="publicidad">
              ESPACIO PARA PUBLICIDAD
          </div>
                        <div id="paginacion">
                            <?php
                                include 'Conexion.php';

                                $query = "SELECT * FROM tblimagenes";
                                $resultado = mysqli_query($Conexion,$query);
                                $num_filas = mysqli_num_rows($resultado);
                                $total_paginas = ceil($num_filas / $por_pagina);

                                echo "<a href='index.php?pagina=1' id= 'primera'>".'Primera'."</a>";
                                for($i =1;$i<=$total_paginas;$i++)
                                {
                                    echo "<a id ='paginas' href='index.php?pagina=".$i."'>".$i."</a>";
                                }
                                echo "<a id = 'ultima' href='index.php?pagina=$total_paginas'>". ' Ultima'."</a>";
                               mysqli_close($Conexion);   
                            ?>
                        </div>
              
          
          
          
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
    <div id="footer">
          
                Informacion de la pagina:<br>
                desarrolladores:<br>
                <a href="https://www.facebook.com/ri.chi.161">@Ri chi</a><br>
                <a href="https://www.facebook.com/Randypj92">@Randy</a><br>
                
    </div>
    
</html>
