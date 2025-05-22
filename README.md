# Creacion CRUD basico con Cake PHP

Ref: https://book.cakephp.org/

### 1) Crear una nueva base de datos a traves de mysql

    CREATE DATABASE cakephp-crud_db;

### 2) Crear una nueva aplicacion en la carpeta:

    composer create-project --prefer-dist cakephp/app:~5.0 cakephp

### 3) Inciar la aplicacion en consola CMD dentro de carpeta de la aplicacion:

    bin\cake server

    Nota: deberia quedar funcionando en la url: http://localhost:8765/

### 4) Verificar que tanto lo que se encuentra en Environment como Filesystem se encuentre en verde, sino deben resolverse dichos errores.
Tambien en Database deberia estar en verde, pero aun falta conectar a la base de datos creada.

### 5) Conectar con la base de datos creada en config\app_local.php:

    'Datasources' => [
        'default' => [
            'host' => 'localhost',
            /*
             * CakePHP will use the default DB port based on the driver selected
             * MySQL on MAMP uses port 8889, MAMP users will want to uncomment
             * the following line and set the port accordingly
             */
            //'port' => 'non_standard_port_number',

            'username' => 'root',
            'password' => '',

            'database' => 'cakephp-crud_db',
            ...
            ...

### 6) Crear migracion (tabla) inicial para CRUD:

    bin/cake bake migration CreateArticulos nombre:string texto:string created modified

    Nota: esto creara una migracion en config\Migrations con las siguientes columnas: nombre,texto,created,modified

### 7) Correr migracion:

    bin/cake migrations migrate

### 8) Creacion CRUD final:

    bin/cake bake all articulos

    Nota: el termino "all" refiere a crear TODO el crud completo, incluye Controlador, Modelo y Vista.

    templates\Articulos\add.php
    templates\Articulos\edit.php
    templates\Articulos\index.php
    templates\Articulos\view.php
    src\Controller\ArticulosController.php
    src\Model\Entity\Articulo.php
    src\Model\Table\ArticulosTable.php

### 9) Test finales:

    a) Verificar que abra la ruta http://localhost:8765/articulos/

    b) Veremos una tabla de articulos que responde al template\Articulos\index.php

    c) Crear nuevo articulo (template\Articulos\add.php):
    Presionar el boton New Articulo (Veremos un formulario para creacion de un articulo)

    d) Luego de crear un articulo, al vovler a index podremos visualizarlo, editarlo, eliminarlo o crear mas articulos.

---