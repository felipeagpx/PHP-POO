<?php

/*
 *
 * @author Felipe
 */

class Lutador {

    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    //Metodo Construtor
    public function __construct($nome, $nacionalidade, $idade, $altura, $peso, $vitorias, $derrotas, $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setAltura($altura);
        $this->setPeso($peso);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    //Metodos Getters e Setters
    public function getNome() {
        return $this->nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function getAltura() {
        return $this->altura;
    }

    public function getPeso() {
        return $this->peso;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function getVitorias() {
        return $this->vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }

    private function setNome($nome) {
        $this->nome = $nome;
    }

    private function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    private function setIdade($idade) {
        $this->idade = $idade;
    }

    private function setAltura($altura) {
        $this->altura = $altura;
    }

    private function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    private function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    private function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    private function setEmpates($empates) {
        $this->empates = $empates;
    }

    //Demais metodos
    public function apresentar() {
        echo "<p>------------------------------------------------------------------------------------------</p>";
        echo "<p>CHEGOU A HORA! O Lutador: " . $this->getNome() . "<br>";
        echo "Veio diretamente do(a): " . $this->getNacionalidade() . "<br>";
        echo "Tem " . $this->getIdade() . " anos e pesa " . $this->getPeso() . " KG<br>";
        echo "Fugurando na categoria dos pesos: " . $this->getCategoria() . "<br>";
        echo "No seu cartel conta com: " . $this->getVitorias() .
        " vitoria(s) " . $this->getDerrotas() . " derrota(s) e " .
        $this->getEmpates() . " empate(s)<br> </p>";
        echo "<p>------------------------------------------------------------------------------------------</p>";
    }

    public function ganhar() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perder() {
        $this->setDerrotas($this->getDerrotas() + 1);
    }

    public function empatar() {
        $this->setEmpates($this->getEmpates() + 1);
    }

}
