<?php

class Puerta implements PuertasInterface{
    public function Bloqueo($data){
        return var_dump("El nombre es: ".$data);
    }
}
