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

    public static function getTodosButacas()
    {
        $conexion = CineDB::connectDB();
        $clientes_consulta = $conexion->query("select * from butacas ORDER BY numero ASC");
        while ($registro = $clientes_consulta->fetchObject()) {
            $productos[] = new Butaca($registro->id_butaca, $registro->id_usuario, $registro->numero);
        }
        if (empty($productos)) {
          $productos[]=[];
        }
        return $productos;
    }

    public function insertButaca()
    {
        $conexion = CineDB::connectDB();
        $insercion = "INSERT INTO butacas (id_usuario, numero) VALUES (\"" . $this->id_usuario . "\", \"" . $this->numero . "\")";
        $conexion->exec($insercion);
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
    
}
