<!Doctype html>
<html>
    <head>
        <title>MEMENTIRA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="index.php">RECIENTES</a>
              <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                  <a class="nav-link" href="index.php">PORTADA<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="imagenes.php">IMAGENES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="gifs.php">GIFS</a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
              </form>
            </div>
          </nav>
             <div class="container">
                         <?php
                  function display()
        {
            $host = "localhost";
            $user = "root";
            $basedatos = "mementira";

            $Conexion = mysqli_connect($host, $user,"", $basedatos);
            $query = "SELECT gif FROM tblgif";
            $resultado = mysqli_query($Conexion,$query);
            
            echo "<table>";
            echo "<th>";
            echo "<tr>IMAGEN</tr>";
            echo "</th>";
            $row = array();
            while ($row = mysqli_fetch_array($resultado)) {
               echo "<tr>";
               echo '<td><img class="img-fluid img-thumbnail rounded" src="data:image;base64,'.base64_encode($row['gif']).'"></td>'?>
               <?php
               echo "</tr>";
               echo "</table>";
            }
            mysqli_close($Conexion);
        }
         display();
?> 
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>