<?php
class Player {
    private $nome;
    private $nivel;
    private $inventario;

    public function __construct($nome) {
        $this->nome = $nome;
        $this->nivel = 1;  
        $this->inventario = new Inventario();
    }

    public function subirNivel() {
        $this->nivel++;
        $this->inventario->aumentarCapacidade($this->nivel);  
    }

    public function coletarItem($item) {
        $this->inventario->adicionarItem($item);
    }

    public function soltarItem($item) {
        $this->inventario->removerItem($item);
    }

    public function getNome() {
        return $this->nome;
    }

    public function getNivel() {
        return $this->nivel;
    }

    public function getInventario() {
        return $this->inventario;
    }
}
?>
