<?php
include('./includes/classes/Aluno.php');

// $alunos = [
//     'a1' => ['nome' => 'Pedro', 'sobrenome' => 'Silva', 'idade' => 19],
//     'a2' => ['nome' => 'Paulo', 'sobrenome' => 'Santos', 'idade' => 21],
//     'a3' => ['nome' => 'Peter', 'sobrenome' => 'Parker', 'idade' => 17],
//     'a4' => ['nome' => 'Pablo', 'sobrenome' => 'Neruda', 'idade' => 29],
//     'a5' => ['nome' => 'Pierre', 'sobrenome' => 'Le Piele', 'idade' => 23]
// ];

// foreach ($alunos as $aluno) {
//     echo $aluno['nome'].' '.$aluno['sobrenome'].' '.$aluno['idade'].'<br>';
// }

$a1 = new Aluno('Pedro', 'Silva', 19);
$a2 = new Aluno('Paulo', 'Santos', 21);
$a3 = new Aluno('Peter', 'Parker', 17);
$a4 = new Aluno('Pablo', 'Neruda', 29);
$a5 = new Aluno('Pierre', 'Le Piele', 23);

$alunos = [$a1, $a2, $a3, $a4, $a5];

foreach ($alunos as $aluno) {
    echo $aluno->get_nome().' '.$aluno->get_sobrenome().' '.$aluno->get_idade().'<br>'.'<hr>';
}