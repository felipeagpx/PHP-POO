<?php

/*
 * @author Felipe
 */

class ContaBanco {

    //Atributos 
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    //Metodos
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($this->getTipo() === "CC") {
            $this->setSaldo(50.00);
        } else {
            $this->setSaldo(150.00);
        }
    }

    public function fecharConta() {
        if ($this->getSaldo() == 0) {
            $this->setStatus(false);
        } else {
            if ($this->getSaldo() > 0) {
                echo "<p> Conta ainda tem Saldo, Não pode ser fechada.</p>";
            } else if($this->getSaldo() < 0) {
                echo "<p> Conta com Saldo negativo, Não pode ser fechada.</p>";
            }
        }
    }

    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
        } else {
            echo "<p>Conta fechada, não consigo depositar!</p>";
        }
    }

    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p> Conta fechada, não é possivel sacar</p>";
        }
    }

    public function tarifaMensal() {
        if ($this->getTipo() === "CC") {
            $mensalidade = 12;
        } else {
            $mensalidade = 12;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() > $mensalidade) {
                $this->setSaldo($this->getSaldo() - $mensalidade);
            }
        } else {
            echo "<p> Conta fechada, não é possivel cobrar mensalidade.</p>";
        }
    }

    //Metodo construtor
    public function __construct() {
        $this->setSaldo(0);
        $this->setStatus(false);
        echo "<p> Conta criada com sucesso</p>";
    }

    // Metodos getters e setters
    public function getNumConta() {
        return $this->numConta;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function getDono() {
        return $this->dono;
    }

    public function getSaldo() {
        return $this->saldo;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setNumConta($numConta) {
        $this->numConta = $numConta;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setDono($dono) {
        $this->dono = $dono;
    }

    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

}
