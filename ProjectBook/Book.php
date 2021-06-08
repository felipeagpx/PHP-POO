<?php

require_once './People.php';
require_once './Publication.php';
/*
 * @author Felipe
 */

class Book implements Publication {

    //Attributes
    private $title;
    private $author;
    private $numpages;
    private $nowPage;
    private $open;
    private $reader;

    //Constructor Method
    public function __construct($title, $author, $numPages, $reader) {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setNumpages($numPages);
        $this->setReader($reader);
        $this->setNowPage(0);
        $this->setOpen(false);
    }

    //Accessor Methods and Modified Methods
    private function getTitle() {
        return $this->title;
    }

    private function getAuthor() {
        return $this->author;
    }

    private function getNumpages() {
        return $this->numpages;
    }

    private function getNowPage() {
        return $this->nowPage;
    }

    private function getOpen() {
        return $this->open;
    }

    private function getReader() {
        return $this->reader;
    }

    private function setTitle($title) {
        $this->title = $title;
    }

    private function setAuthor($author) {
        $this->author = $author;
    }

    private function setNumpages($numpages) {
        $this->numpages = $numpages;
    }

    public function setNowPage($nowPage) {
        $this->nowPage = $nowPage;
    }

    private function setOpen($open) {
        $this->open = $open;
    }

    private function setReader($reader) {
        $this->reader = $reader;
    }

    //Interface implemented methods
    public function openUp() {
        $this->setOpen(true);
    }

    public function close() {
        $this->setOpen(false);
    }

    public function browse($np) {
        if (($np > $this->getNumpages()) || ($np < 0)) {
            echo "<p><br>Não é possivél folhear!</p>";
        } else {
            $this->openUp();
            $this->setNowPage($np);
        }
    }

    public function nextPage() {
        if ($this->getNowPage() == $this->numpages) {
            echo "<p><br>Não é possivél avançar, "
            . "página atual é a ultima página do livro!</p>";
        } else {
            $this->setNowPage($this->getNowPage() + 1);
        }
    }

    public function backPage() {
        if ($this->getNowPage() == 0) {
            echo "<p><br>Não é possivél voltar, "
            . "página atual é a primeira página do livro!</p>";
        } else {
            $this->setNowPage($this->getNowPage() - 1);
        }
    }

    //Other methods
    public function detail(){
        if($this->getOpen()){
            echo "<p>----------------------------------------------------------------------</p>";
            echo "<p>Livro: ".$this->getTitle()
                ."<br>Autor: ".$this->getAuthor()
                ."<br>Número de Páginas: ".$this->getNumpages()
                ."<br>Está na Página: ".$this->getNowPage()
                ."<br>Quem está lendo esse livro atualmente é: </p>";
            
            echo $this->reader->showReader();
            echo "<p>----------------------------------------------------------------------</p>";
        } else {
            
            echo "<p><br>O livro está Fechado!</p>";
            
        }
        
        
    }
}
