<?php

require_once './Controle.php';

/**
 * Description of ControleRemoto
 *
 * @author Felipe
 */
class ControleRemoto implements Controle {

    //Atributos
    private $ligado;
    private $tocando;
    private $volume;
    private $volumeAnterior;

    //Metodo Construtor
    public function __construct() {
        $this->volume = 50;
        $this->ligado = false;
        $this->tocando = false;
    }

    //Metodos Getters e Setters
    private function getLigado() {
        return $this->ligado;
    }

    private function getTocando() {
        return $this->tocando;
    }

    private function getVolume() {
        return $this->volume;
    }

    private function getVolumeAnterior() {
        return $this->volumeAnterior;
    }

    private function setLigado($ligado) {
        $this->ligado = $ligado;
    }

    private function setTocando($tocando) {
        $this->tocando = $tocando;
    }

    private function setVolume($volume) {
        $this->volume = $volume;
    }

    private function setVolumeAnterior($volumeAnterior) {
        $this->volumeAnterior = $volumeAnterior;
    }

    //Metodos implementados da interface Controle.php
    public function ligar() {
        $this->setLigado(true);
    }

    public function desligar() {
        $this->setLigado(false);
    }

    public function abrirMenu() {
        echo"<br> Está ligado? " . ($this->getLigado() ? "SIM" : "NÃO");
        echo"<br> Está tocando? " . ($this->getTocando() ? "SIM" : "NÃO");
        echo"<br>Volume: ".$this->getVolume()."   ";
        for($i = 0; $i <= $this->getVolume(); $i += 5) {
            echo"||";
        }
        echo"<br>";
    }

    public function fecharMenu() {
        echo"<br>Fechando menu...";
    }

    public function ligarMudo() {
        if ($this->getLigado() && $this->getVolume() > 0) {
            $this->setVolumeAnterior($this->getVolume());
            $this->setVolume(0);
        }
    }

    public function desligarMudo() {
        if ($this->getLigado() && $this->getVolume() == 0) {
            $this->setVolume($this->getVolumeAnterior());
        }
    }

    public function maisVolume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() + 5);
        }
    }

    public function menosVlume() {
        if ($this->getLigado()) {
            $this->setVolume($this->getVolume() - 5);
        }
    }

    public function play() {
        if ($this->getLigado() && !($this->getTocando())) {
            $this->setTocando(true);
        }
    }

    public function pause() {
        if ($this->getLigado() && $this->getTocando()) {
            $this->setTocando(false);
        }
    }
    
}
