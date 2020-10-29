<?php

require "Pessoa.php";
require "Programador.php";

$programador = new Programador("João", "PHP");

echo $programador->getNome();

#constantes
echo $programador::ESPECIE;
