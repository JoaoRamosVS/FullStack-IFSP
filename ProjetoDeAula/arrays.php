<?php
// Aula 03 - Arrays

// array indexado
$a1 = ['Setembro', 'Outubro', 'Novembro', 'Dezembro'];

// acesso aos elementos do array
echo 'Estamos no mês de '.$a1[0].' de 2024<br><br>';

//$a2 = [25, 84, 42, 63, 84, 11];
$a2 = [0 => 25, 1 => 84, 2 => 42, 3 => 63, 4 => 84, 5 => 11];

$sm = $a2[3] + $a2[5];
echo "A soma do 4º elemento ($a2[5]) com o 6º elemento é: $sm <br><br>";

// array associativo
$pessoa = ['nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'];

    $rs = [
        ['id' => 1, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
        ['id' => 1, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
        ['id' => 1, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
        ['id' => 1, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
        ['id' => 1, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino']
    ];

echo 'Dados da '.$pessoa['nome'].'<br>';
foreach ($pessoa as $key => $value) {
    echo "$key => $value<br>";
}
echo '<br><br>';

// matrix indexada 

$m = [
    [1, 2, 3, 4, 5],
    [11, 12, 13, 14, 15],
    [21, 22, 23, 24, 25],
    [31, 32, 33, 34, 35]
];

foreach ($m as $row) {
   // echo print_r($row, true).'<br>';
   foreach($row as $item){
    echo "$item - ";
}
echo '<br>';
}
echo '<br><br>';


// matrix associativa

$rs = [
['id' => 11, 'nome' => 'Maria', 'snome' => 'Silva', 'idade' => 22, 'genero' => 'feminino'],
['id' => 12, 'nome' => 'Ana', 'snome' => 'Motta', 'idade' => 18, 'genero' => 'feminino'],
['id' => 13, 'nome' => 'Bia', 'snome' => 'Oliveira', 'idade' => 29, 'genero' => 'feminino'],
['id' => 14, 'nome' => 'Eva', 'snome' => 'Braun', 'idade' => 42, 'genero' => 'feminino'],
['id' => 15, 'nome' => 'Julia', 'snome' => 'Fateau', 'idade' => 62, 'genero' => 'feminino'],
];

foreach ($rs as $pessoa){
echo 'Nome: '.$pessoa['nome'].', idade: '.$pessoa['idade'].'<br>'; 
}
echo '<br><br>';