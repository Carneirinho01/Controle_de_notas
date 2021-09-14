<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <?php
        include 'Model/Aluno.php';
        include 'Model/Turma.php';

        //instanciando 5 alunos.
        $aluno1 = new Aluno("Alexandre", 200150157, 9.5, 10, 8.5, 7);
        $aluno2 = new Aluno("Raul", 123150157, 5.5, 5., 9.5, 10);
        $aluno3 = new Aluno("Rennan", 100150158, 9.5, 9, 7.5, 6);
        $aluno4 = new Aluno("Rafael", 200130157, 8.5, 5, 8, 7.5);
        $aluno5 = new Aluno("Yan", 900150157, 10, 9, 7.5, 6.5);

        $alunos = array();
        array_push($alunos, $aluno1);
        array_push($alunos, $aluno2);
        array_push($alunos, $aluno3);
        array_push($alunos, $aluno4);
        array_push($alunos, $aluno5);

        //instanciando a turma.
        $turma1 = new Turma("A-150");

        foreach ($alunos as $aluno) {
            $deuCerto = $turma1->addAluno($aluno);
            if ($deuCerto) {
                echo "<p>O aluno {$aluno->getNome()} inserido com sucesso na turma</p>";
            } else {
                echo "<p style='color:red'>Erro - turma lotada!</p>";
            }
        }
        ?>
    </div>
    <div style="background:black;text-align:center;border-radius:8px">
        <h2 style="color:white">Controle de Notas de Turma</h2>
    </div>
    <div style="margin-left:16px">
        <div style="background:black;text-align:center;border-radius:8px">
            <h2 style="color:white">Notas dos alunos da Turma <?= $turma1->getNome(); ?></h2>
        </div>
        <p>&gt;&gt;Média da turma: <?= $turma1->mediaTurma(); ?></p>
        <div style="margin-left:16px">
            <?php
            foreach ($alunos as $aluno) {
                echo "<p>&gt;&gt;{$aluno->getNome()}</p>";
                echo "
                <table>
                    <tr>
                        <th>Nota 1</th>
                        <th>Nota 2</th>
                        <th>Nota 3</th>
                        <th>Nota 4</th>
                        <th>Média</th>
                    </tr>
                    <tr>
                        <td>{$aluno->getNota1()}</td>
                        <td>{$aluno->getNota2()}</td>
                        <td>{$aluno->getNota3()}</td>
                        <td>{$aluno->getNota4()}</td>
                        <td>{$aluno->getMedia()}</td>
                    </tr>
                </table>
                ";
            }
            ?>
        </div>
        <p>Desenvolvido por Alexandre Carneiro Santos</p>
    </div>


</body>

</html>