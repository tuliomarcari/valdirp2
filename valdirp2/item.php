<?php
abstract class Item {
    protected $nome;
    protected $espaco;

    public function __construct($nome, $espaco) {
        $this->nome = $nome;
        $this->espaco = $espaco;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getEspaco() {
        return $this->espaco;
    }
}
?>
