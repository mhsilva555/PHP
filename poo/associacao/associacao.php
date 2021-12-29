<?php

require_once('classes/Fabricante.php');
require_once('classes/Produto.php');

$produto = new Produto('Chocolate', 10, 9.80);
$fabricante = new Fabricante('Lacta', 'Rua das Rosas 96, 04048-001 - São Paulo-SP', '32.602.025/0001-51');

$produto->setFabricante($fabricante);

echo "O produto {$produto->getDescricao()} é fabricado por {$produto->getFabricante()->getNome()}";

echo '<pre>';
print_r($produto);
print_r($fabricante);
echo '</pre>';