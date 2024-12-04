<?php

include('./includes/classes/Aluno.php');
include('./includes/classes/Atestado.php');

$at01 = new Atestado('Airton Senna', 'T2 - A.D.S. Nova Matriz');
$at01->imprime();