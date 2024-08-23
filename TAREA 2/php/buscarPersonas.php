<?php

include 'conexion.php';
include 'head.php';

try{
    if (isset($_POST['verLista'])) {
        $sql = "SELECT * FROM clientes";
        $resultadoConsulta = $conexion_sql->query($sql);
    }

    if (isset($_POST['verPersonasFisicas'])){
        $sql = "SELECT * FROM clientes WHERE tipo_Persona = 'Fisica'";
        $resultadoConsulta = $conexion_sql->query($sql);
    }

    if (isset($_POST['verPersonasMorales'])){
        $sql = "SELECT * FROM clientes WHERE tipo_Persona = 'Moral'";
        $resultadoConsulta = $conexion_sql->query($sql);
    }
} catch (Exception $e) {
    echo "Ocurrio un error al realizar la consulta: " . $e->getMessage();
}

echo "<body>
        <section>
            <div>
                <h1>Tarea 1</h1>
                <h1>Programa que retorna las personas fisicas y morales existentes en nuestra base de datos</h1>
                <hr>
                <h1>Resultado de la Busqueda</h1>
            </div>
        </section>";

if ($resultadoConsulta->num_rows > 0) {
    echo "<section>
        <div>";

    if (isset($_POST['verPersonasFisicas'])){
        echo "<h2 class ='textoBlanco'>Personas Fisicas</h2>";
    } else if (isset($_POST['verPersonasMorales'])) {
        echo "<h2 class ='textoBlanco'>Personas Morales</h2>";
    } else if (isset($_POST['verLista'])) {
        echo "<h2 class ='textoBlanco'>Lista Completa de Personas Fisicas y Morales</h2>";
    }

    while ($celdaInfo = $resultadoConsulta->fetch_assoc()) {

        echo "<h4 class ='textoBlanco'>" . $celdaInfo['idCliente'] . ", " . $celdaInfo['RFC'] . ", " . $celdaInfo['tipo_Persona'] . "</h4>";

    }

    echo "</div>
        </section>";

} else {

    echo "<section>
            <div>
                <p><strong>No se encontraron resultados</strong></p>
            </div>
        </section>";
}

$conexion_sql->close();

echo "<br>
      <section>
        <div>
            <button><a href=../index.php>Regresa a la pagina principal</a></button>
        </div>
      </section>
    </body>";

include 'footer.php';

?>