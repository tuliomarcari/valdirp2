<?php
require_once 'player.php';
require_once 'inventario.php';
require_once 'item.php';
require_once 'ataque.php';
require_once 'defesa.php';
require_once 'magia.php';

$player1 = new Player("Noob Pro");
$player2 = new Player("FNX");

$itemAtaque1 = new Ataque("Espada");
$itemAtaque2 = new Ataque("Arma");
$itemDefesa1 = new Defesa("Escudo full");
$itemDefesa2 = new Defesa("Armadura");
$itemMagia1 = new Magia("Espinhos");
$itemMagia2 = new Magia("Paralizante"); 

$player1->coletarItem($itemAtaque1);
$player1->coletarItem($itemDefesa1);
$player1->coletarItem($itemMagia1);

$player2->coletarItem($itemDefesa2);
$player2->coletarItem($itemAtaque2);
$player2->coletarItem($itemMagia2);

echo "Inventário do " . $player1->getNome() . " (No nivel " . $player1->getNivel() . "):<br>";

foreach ($player1->getInventario()->getItens() as $item) {
    echo $item->getNome() . " = " . $item->getEspaco() . "<br>";
}

echo "Capacidade atual do inventário de " . $player1->getNome() . ": " . $player1->getInventario()->getCapacidade() . "<br>";

$player1->subirNivel();

echo "Você subiu de nivel " .  $player1->getNome() ."<br>";
echo "Capacidade do inventário agora é: " . $player1->getInventario()->getCapacidade() . "<br>";
echo "Inventário do " . $player2->getNome() . " (Nível " . $player2->getNivel() . "):<br>";

foreach ($player2->getInventario()->getItens() as $item) {
    echo $item->getNome() . " = " . $itemMagia2->getEspaco() . "<br>";
}

echo "Capacidade atual do inventário de " . $player2->getNome() . ": " . $player2->getInventario()->getCapacidade() . "<br>";
?>
