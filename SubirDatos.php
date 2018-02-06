<?php
require_once 'biblioteca.php';

$contenido= <<<CONTENIDO

    <div class="container">
        <div class="jumbotron">
            <div class="row">
                <div class="col">
                </div>
                <div class="col-6">
                    <h2 style="color:cornflowerblue">Datos del MeMe</h2>
                    <form action="SubirDatos.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="txtNombre">Nombre</label>
                            <input type="text" class="form-control" name="Nombre" id="txtNombre">
                        </div>
                        <div class="form-group">
                            <label for="txtEmail">Email</label>
                            <input type="email" class="form-control" name="Email" id="txtEmail">
                        </div>
                        <div class="form-group">
                            <label for="txtTitulo">Titulo(*)</label>
                            <input type="text" class="form-control" name="Titulo" id="txtTitulo">
                        </div>
                        <div class="form-group">
                            <label for="txtCategoria">Tipo de archivo</label>
                            <select class="form-control" id="txtTipo" name="Tipo">
                                <option value="imagen">Imagen</option>
                                <option value="video">Video</option>
                                <option value="gif">Gif</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <label for="txtArchivo ">Archivo(*)</label>
                            <input type="file" class="form-control-file" id="txtArchivo" name="Archivo">
                        </div>
                        <div class="form-group">
                            <label for="txtCategoria">Categoria</label>
                            <select class="form-control" id="txtCategoria" name="Categoria">
                                <option value="imagen">Imagen</option>
                                <option value="gif">Gif</option>
                           </select>
                        </div>
                        <div class="form-group">
                            <input type="submit" id="btnEnviar" name="submit" value="Subir Meme" class="btn btn-success">
                        </div>
                    </form>
                </div>
                <div class="col">

                </div>
            </div>
        </div>
    </div>
CONTENIDO;

mostrarPagina($contenido);
    