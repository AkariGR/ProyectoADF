<?php

class Objeto_Blog{
    private $id;
    private $titulo;
    private $fecha;
    private $comentarios;
    private $imagen;

    //codificacion de los geters
    public function getId(){
        return $this->id;
    }public function getTitulo(){
        return $this->titulo;
    }public function getFecha(){
        return $this->fecha;
    }public function getComentarios(){
        return $this->comentarios;
    }public function getImagen(){
        return $this->imagen;
    }

    //codificacion de los seters
    public function setId($id){
        return $this->id=$id;
    }public function setTitulo($titulo){
        return $this->titulo=$titulo;
    }public function setFecha($fecha){
        return $this->fecha=$fecha;
    }public function setComentarios($comentarios){
        return $this->comentarios=$comentarios;
    }public function setImagen($imagen){
        return $this->imagen=$imagen;
    }
}
?>