<?php
require_once 'conexion.php';
class Usuario
{
    private $nombre;
    private $apellidos;
    private $correo;
    private $nombre_usuario;
    private $contrasena;

    function __construct($nombre = '', $apellidos = '', $correo = '', $nombre_usuario = '', $contrasena = '')
    {
        $this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
    }

    public function comprobarLogin($usuario, $contra)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE nombre_usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        if (empty($registro)) {
            return false;
        } else {
            $seleccion = "SELECT * FROM usuario WHERE nombre_usuario='$usuario' AND contrasena='$contra'";
            $consulta = $conexion->query($seleccion);
            $registro = $consulta->fetchObject();
            if (empty($registro)) {
                return false;
            } else {
                return true;
            }
        }
    }

    public function comprobarRegistro($usuario)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE nombre_usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        return $registro ;
    }


    public function datosUsuario($usuario)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT nombre,apellidos FROM usuario WHERE nombre_usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        return $registro;
    }

    public function getUsuarioPorId($usuario)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE nombre_usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $datosUsuario = new Usuario($registro->nombre, $registro->apellidos, $registro->correo, $registro->nombre_usuario, $registro->contrasena);
        return $registro;

       
     
    }


    public function numeroDeId($usuario)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT id_usuario FROM usuario WHERE nombre_usuario='$usuario'";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $datosUsuario = new Usuario($registro->nombre, $registro->apellidos, $registro->correo, $registro->nombre_usuario, $registro->contrasena);
        return $registro;

       
     
    }


    public function getUsuarioPorIdBorrado($usuario)
    {
        $conexion = CocheDB::connectDB();
        $seleccion = "SELECT * FROM usuario WHERE nombre_usuario=\"" . $usuario . "\"";
        $consulta = $conexion->query($seleccion);
        $registro = $consulta->fetchObject();
        $datosUsuario = new Usuario($registro->nombre, $registro->apellidos, $registro->correo, $registro->nombre_usuario, $registro->contrasena);
        return $datosUsuario;

       
     
    }


  


    public function insert()
    {
        $conexion = CocheDB::connectDB();
        $insercion = "INSERT INTO usuario (nombre, apellidos, correo,nombre_usuario,contrasena) VALUES (\"" . $this->nombre . "\", \"" . $this->apellidos . "\", \"" . $this->correo . "\", \"" . $this->nombre_usuario . "\", \"" . $this->contrasena . "\")";
        $conexion->exec($insercion);
    }
    // public function delete()
    // {

    //     $conexion = CocheDB::connectDB();
    //     $borrado = "DELETE FROM usuario WHERE id_usuario=2" ;
    //     // $borrado = "DELETE FROM usuario WHERE nombre_usuario=\"" . $this->nombre_usuario . "\"";

    //     $conexion->exec($borrado);
    // }



    public function delete($nombre_usuario)
    {
        $conexion = CocheDB::connectDB();
        $borrado = "DELETE FROM usuario WHERE nombre_usuario=\"" . $nombre_usuario . "\"";
        $conexion->exec($borrado);
    }


    public function update()
    {
        // $_COOKIE['usuario'];
        // die();
        $conexion = CocheDB::connectDB();
        $actualiza = "UPDATE usuario SET nombre=\"" . $this->nombre . "\", apellidos=\"" . $this->apellidos  . "\", correo=\"" . $this->correo . "\", nombre_usuario=\"" . $this->nombre_usuario . "\", contrasena=\"" . $this->contrasena . "\" WHERE nombre_usuario=\"" . $_SESSION['usuario'] . "\"";
        $conexion->exec($actualiza);
    }

    public function getUsuario()
    {
        return $this->usuario;
    }
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
        return $this;
    }
    public function getContrasena()
    {
        return $this->contrasena;
    }
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;
        return $this;
    }
    public function getRol()
    {
        return $this->rol;
    }
    public function setRol($rol)
    {
        $this->rol = $rol;
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
    public function getApellidos()
    {
        return $this->apellidos;
    }
    public function setApellidos($apellidos)
    {
        $this->apellidos = $apellidos;
        return $this;
    }
    public function getcorreo()
    {
        return $this->correo;
    }
    public function setcorreo($correo)
    {
        $this->correo = $correo;
        return $this;
    }
}
