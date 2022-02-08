<?php

function conectar(){
    $serv = "127.0.0.1";
    $mibbdd = "portafolio";
    $ususerv = "root";
    $contra = "mysql";
    $conex = mysqli_connect($serv, $ususerv, $contra, $mibbdd);

    return $conex;
}

function insertar($fecha, $empresa, $cargo){
    $consulta = "INSERT INTO `trabajos` ( `FECHA`, `EMPRESA`, `CARGO`) VALUES('$fecha', '$empresa', '$cargo')";
    $result = mysqli_query(conectar(), $consulta);
}


function mostrar(){
    $consulta = "SELECT * FROM trabajos";
    $result = mysqli_query(conectar(), $consulta);

    if ($result){
        echo "<table>
                <tr>
                    <th>Fecha</th>
                    <th>Empresa</th>
                    <th>Cargo</th>
                </tr>";
    
        while ($fila = $result->fetch_assoc()){
            echo "<tr><td>" . $fila["FECHA"] . "</td>";
            echo "<td>" . $fila["EMPRESA"] . "</td>";
            echo "<td>" . $fila["CARGO"] . "</td></tr>";
        }
    echo "</table>";
    }else {
        echo "Mal seleccionar";
    }
}
?>