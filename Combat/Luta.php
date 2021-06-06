<?php

require_once './Lutador.php';
/*
 * @author Felipe
 */

class Luta {

    //Atributos
    private $desafiante;
    private $desafiado;
    private $rounds;
    private $aprovada;

    // Metodos 
    public function marcarLuta($ltd1, $ltd2) {
        if (($ltd1->getCategoria() === $ltd2->getCategoria()) && ($ltd1 != $ltd2)) {
            $this->aprovada = true;
            $this->setDesafiante($ltd1);
            $this->setDesafiado($ltd2);
        } else {
            $this->aprovada = false;
            $this->desafiante = null;
            $this->desafiado = null;
        }
    }

    public function lutar() {
        if ($this->aprovada) {
            $this->desafiante->apresentar();
            $this->desafiado->apresentar();
            $vencedor = rand(0, 2);
            switch ($vencedor) {
                case 0: // empate
                    echo "<p>EMPATE</p>";
                    $this->desafiante->empatar();
                    $this->desafiado->empatar();
                    $this->desafiante->apresentar();
                    $this->desafiado->apresentar();
                    break;
                case 1: // desafiante vence
                    echo "<p>O lutador: " . $this->desafiante->getNome() . " Venceu</p><br>";
                    $this->desafiante->ganhar();
                    $this->desafiado->perder();
                    $this->desafiante->apresentar();
                    $this->desafiado->apresentar();
                    break;
                case 2: // desafiado vence
                    echo "<p>O lutador: " . $this->desafiado->getNome() . " Venceu</p><br>";
                    $this->desafiado->ganhar();
                    $this->desafiante->perder();
                    $this->desafiado->apresentar();
                    $this->desafiante->apresentar();
                    break;
            }
        } else {
            echo "<p>LUTA NÃO APROVADA!</p>";
        }
    }

    // Metodos Especiais
    public function getDesafiante() {
        return $this->desafiante;
    }

    public function getDesafiado() {
        return $this->desafiado;
    }

    public function getRounds() {
        return $this->rounds;
    }

    public function getAprovada() {
        return $this->aprovada;
    }

    public function setDesafiante($desafiante) {
        $this->desafiante = $desafiante;
    }

    public function setDesafiado($desafiado) {
        $this->desafiado = $desafiado;
    }

    public function setRounds($rounds) {
        $this->rounds = $rounds;
    }

    public function setAprovada($aprovada) {
        $this->aprovada = $aprovada;
    }

}
