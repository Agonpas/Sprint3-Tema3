<?php
class Tigger {
    private static $instancia; //instancia del Singleton
    private $roarContador = 0; // inicializamos el contador a 0
    private function __construct() { // constructor privado para evitar la creación de objetos
        echo "Building charactr..." . PHP_EOL;
    }
    /*metodo para crear laúnica instanci de la clase*/
    public static function getInstancia() {
        if (!isset(self::$instancia)) { //comprobamos la existéncia de la instancia en caso de no existir
            self::$instancia = new self(); // se crea
        }

        return self::$instancia; // se devuelve el valor único de la insancia
    }
    /*la función roar*/
    public function roar(){
        $this->roarContador++; // al usarse se suma uno al contador
        echo "Grrrr!" . PHP_EOL; // imprimimos el rugido
    }
    /*getter contador nos muestra el número de rugidos*/
    public function getRoarContador(){
        return $this->roarContador;
    }
}
?>