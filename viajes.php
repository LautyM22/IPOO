<?php 

Class Viaje{
    //Atributos
    private $codigo;
    private $destino;
    private $cant_max_pasajeros;
    private $pasajeros_viaje;

    //Metodos
    public function __construct($codigo, $destino, $cant_max_pasajeros, $pasajeros_viaje){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cant_max_pasajeros = $cant_max_pasajeros;
        $this->pasajeros_viaje = array();
    }

    //Retorna el valor del código
    public function getCodigo(){
        return $this->codigo;
    }

    //Retorna el lugar de destino
    public function getDestino(){
        return $this->destino;
    }

    //Retorna la cantidad maxima de pasajeros
    public function getCant_max_pasajeros(){
        return $this->cant_max_pasajeros;
    }

    //Retorna los pasajeros del viaje
    public function getPasajeros_viaje(){
        return $this->pasajeros_viaje;
    }


    //setea el valor del codigo del viaje
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    //setea el lugar de destino
    public function setDestino($destino){
        $this->destino = $destino;
    }

    //setea la cantidad maxima de pasajeros
    public function setCant_max_pasajeros($cant_max_pasajeros){
        $this->cant_max_pasajeros = $cant_max_pasajeros;
    }

    //este metodo agrega pasajeros y los almacena en un array
    public function setAgregar_pasajeros($nombre, $apellido, $dni){
        
        $array_carga_pasajero = ["nombre"=>$nombre, "apellido"=>$apellido, "DNI"=>$dni];
        $array_push($pasajeros_viaje, $array_carga_pasajero);
    }

    //esta metodo modifica los datos de los pasajeros
    public function setDatosPasajero($i, $nombre, $apellido, $dni){

        $array_carga_pasajero = ["nombre"=>$nombre, "apellido"=>$apellido, "DNI"=>$dni];
        $pasajeros_viaje[$i] = $array_carga_pasajero;
    }

}
?>