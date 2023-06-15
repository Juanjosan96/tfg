<?php
require_once 'conexion.php';
class Entrada
{
    private $id_entrada;
    private $id_usuario;
    private $nombre_pelicula;
    private $butaca;
    private $fecha;
    private $hora;
    private $precio;

    public function __construct($id_entrada = '', $id_usuario = '', $nombre_pelicula = '', $butaca = '', $fecha = '', $hora = '', $precio = '')
    {
        $this->id_entrada = $id_entrada;
        $this->id_usuario = $id_usuario;
        $this->nombre_pelicula = $nombre_pelicula;
        $this->butaca = $butaca;
        $this->fecha = $fecha;
        $this->hora = $hora;
        $this->precio = $precio;

    }

    public function insertEntrada()
    {
        $conexion = CineDB::connectDB();
        $insercion = "INSERT INTO entrada (id_usuario, nombre_pelicula, butaca, fecha, hora, precio ) VALUES (\"" . $this->id_usuario . "\", \"" . $this->nombre_pelicula . "\", \"" . $this->butaca ."\", \"" . $this->fecha ."\", \"" . $this->hora ."\", \"" . $this->precio ."\")";
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
