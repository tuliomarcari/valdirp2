<?php
class Inventario {
    private $capacidade;
    private $itens;

    public function __construct() {
        $this->capacidade = 20; 
        $this->itens = [];
    }

    public function aumentarCapacidade($nivel) {
        $this->capacidade += $nivel * 3;  
    }

    public function podeAdicionar($item) {
        $espacoOcupado = array_reduce($this->itens, function($total, $item) {
            return $total + $item->getEspaco();
        }, 0);
        return ($espacoOcupado + $item->getEspaco()) <= $this->capacidade;
    }

    public function adicionarItem($item) {
        if ($this->podeAdicionar($item)) {
            $this->itens[] = $item;
        } else {
            echo "Não há espaço suficiente para adicionar o item: {$item->getNome()}.\n";
        }
    }

    public function removerItem($item) {
        $key = array_search($item, $this->itens);
        if ($key !== false) {
            unset($this->itens[$key]);
        }
    }

    public function getCapacidade() {
        return $this->capacidade;
    }

    public function getItens() {
        return $this->itens;
    }
}
?>
