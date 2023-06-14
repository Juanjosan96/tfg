<?php
require_once 'conexion.php';
class Butaca
{
    private $id;
    private $id_usuario;
    private $numero;
    public function __construct($id = '', $id_usuario = '', $numero = '')
    {
        $this->id = $id;
        $this->id_usuario = $id_usuario;
        $this->numero = $numero;

    }

    public function insert()
    {
        $conexion = ButacaDB::connectDB();
        $insercion = "INSERT INTO Butaca (nombre, marca, modelo,anio,matricula,color,descripcion,imagen) VALUES (\"" . $this->nombre . "\", \"" . $this->marca . "\", \"" . $this->modelo . "\", \"" . $this->anio . "\", \"" . $this->matricula . "\", \"" . $this->color . "\", \"" . $this->descripcion . "\", \"" . $this->imagen . "\")";
        $conexion->exec($insercion);
    }

    public function delete($matricula)
    {
        $conexion = ButacaDB::connectDB();
        $borrado = "DELETE FROM Butaca WHERE matricula=\"" . $matricula . "\"";
        $conexion->exec($borrado);
    }
    public function update()
    {
        $conexion = ButacaDB::connectDB();
        $actualiza = "UPDATE Butaca SET nombre=\"" . $this->nombre . "\", marca=\"" . $this->marca . "\", modelo=\"" . $this->modelo . "\", anio=\"" . $this->anio . "\", color=\"" . $this->color . "\", matricula=\"" . $this->matricula . "\", descripcion=\"" . $this->descripcion . "\", imagen=\"" . $this->imagen . "\" WHERE matricula=\"" . $_SESSION['nombre'] . "\"";
        $conexion->exec($actualiza);
    }
    public static function getCantidadPagina()
    {
        $conexion = ButacaDB::connectDB();
        $clientes_consulta = $conexion->query("SELECT * FROM Butaca ORDER BY nombre");
        $tamano_pagina = 9;
        $num_total_registros = $clientes_consulta->rowCount();
        $total_paginas = ceil($num_total_registros / $tamano_pagina);
        return $total_paginas;
    }
    public static function getButacas()
    {
        $conexion = ButacaDB::connectDB();
        $tamano_pagina = 9;
        if (isset($_GET["pagina"])) {
            $inicio = ($_GET["pagina"] - 1) * $tamano_pagina;
        } else {
            $inicio = 0;
        }
        $clientes_consulta2 = $conexion->query("select * from Butaca ORDER BY nombre limit " . $inicio . "," . $tamano_pagina);
        while ($registro = $clientes_consulta2->fetchObject()) {
            $productos[] = new Butaca($registro->nombre, $registro->marca, $registro->modelo, $registro->anio, $registro->matricula, $registro->color, $registro->descripcion, $registro->imagen);
        }
        return $productos;
    }

// AQUI
    public function comprobarButaca()
    {
        // $conexion = ButacaDB::connectDB();
        // $seleccion = "SELECT * FROM reserva_butaca WHERE id_usuario='$usuario'";
        // $consulta = $conexion->query($seleccion);
        // $registro = $consulta->fetchObject();
        // print_r($registro);
        // // die();
        // return strlen($registro->id_usuario);

        $conexion = ButacaDB::connectDB();
        $clientes_consulta2 = $conexion->query("select * from reserva_butaca");
        // print_r($clientes_consulta2) ;
        // die();
        while ($registro = $clientes_consulta2->fetchObject()) {
            $productos[] = new Butaca($registro->id, $registro->id_usuario, $registro->numero);
        }

        return $productos;
    }

    public static function getTodosButacas()
    {
        $conexion = CocheDB::connectDB();
        $clientes_consulta = $conexion->query("select * from butacas ORDER BY numero ASC");
        while ($registro = $clientes_consulta->fetchObject()) {
            $productos[] = new Butaca($registro->id_butaca, $registro->id_usuario, $registro->numero);
        }
        if (empty($productos)) {
          $productos[]=[];
        }
        // print_r($productos[0]);
        // die();
        return $productos;
    }

    public function insertButaca()
    {
        $conexion = CocheDB::connectDB();
        $insercion = "INSERT INTO butacas (id_usuario, numero) VALUES (\"" . $this->id_usuario . "\", \"" . $this->numero . "\")";
        $conexion->exec($insercion);
    }

    public function comprobarRepetido($matricula)
    {
        $conexion = ButacaDB::connectDB();
        $seleccion = "SELECT * FROM Butaca WHERE matricula='$matricula'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        if (empty($registro)) {
            return false;
        } else {
            return true;
        }
    }

    public static function getButacaUltimos()
    {
        $conexion = ButacaDB::connectDB();
        $seleccion = "SELECT * FROM butacas ORDER BY numero DESC limit 6";
        $consulta = $conexion->query($seleccion);
        $productos = [];
        while ($registro = $consulta->fetchObject()) {
            $productos[] = new Butaca($registro->nombre, $registro->marca, $registro->modelo, $registro->anio, $registro->matricula, $registro->color, $registro->descripcion, $registro->imagen);
        }
        return $productos;
    }
    public static function getButacaById($matricula)
    {
        $conexion = ButacaDB::connectDB();
        $seleccion = "SELECT * FROM Butaca WHERE matricula=\"" . $matricula . "\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $producto = new Butaca($registro->nombre, $registro->marca, $registro->modelo, $registro->anio, $registro->matricula, $registro->color, $registro->descripcion, $registro->imagen);
        return $producto;
    }

    public function getnumero()
    {
        return $this->numero;
    }
    public function setnumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    public function getCodigo()
    {
        return $this->codigo;
    }
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }
    public function getNombre()
    {
        return $this->nombre;
    }
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }
    public function getAnio()
    {
        return $this->anio;
    }
    public function setAnio($anio)
    {
        $this->anio = $anio;

        return $this;
    }
    public function getImagen()
    {

        return $this->imagen;
    }
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
    public function getMatricula()
    {
        return $this->matricula;
    }
    public function getModelo()
    {
        return $this->modelo;
    }
    public function getMarca()
    {
        return $this->marca;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getDescripcion()
    {
        return $this->descripcion;
    }
}
