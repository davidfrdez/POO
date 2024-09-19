<?php

class SeurosController{
    protected $Seguro;

    public function __construct(Puerta $data){
        $this->Seguro =$data;
    }
    public function Cambios($info){
        $this->Seguro->Bloqueo($info);
    }
}